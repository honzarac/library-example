<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import {Head, useForm} from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3';
    import {ref} from "vue";

    let props = defineProps({
        libraryItem: Object,
        authors: Object
    })

    let isEditModeEnabled = ref(false)

    let form = useForm({
        name: props.libraryItem.name,
        description: props.libraryItem.description,
        author_id: props.libraryItem.author.id,
        ...Object.keys(props.libraryItem.borrowable.custom_data_labels).reduce((map, field) => (map['borrowable.'+field] = props.libraryItem.borrowable[field], map), {})
    })
    form.transform((data) => ({
        ...data,
        author_id: Number.parseInt(data.author_id),
    }))

    function enableEditMode() {
        isEditModeEnabled.value = true
    }

    function save() {
        isEditModeEnabled.value = false
        form.post(`/library-item/${props.libraryItem.id}`)
    }
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <form @submit.prevent="save">

            <Link :href="`/`" class="rounded bg-gray-100 p-2.5 hover:bg-gray-300 float-right">zpět</Link>
            <div class="rounded bg-blue-500 text-white p-2.5 hover:bg-blue-600 float-right mr-2 cursor-pointer" @click="enableEditMode" v-if="!isEditModeEnabled">upravit</div>
            <button class="rounded bg-blue-500 text-white p-2.5 hover:bg-blue-600 float-right mr-2 cursor-pointer" type="submit" v-if="isEditModeEnabled">uložit</button>
            <Link :href="`/library-item/${libraryItem.id}`" method="delete" class="rounded bg-red-500 text-white p-2.5 hover:bg-red-600 float-right mr-2" as="button">smazat</Link>
            <h3 class="font-bold text-2xl">{{ libraryItem.name }}</h3>

            <div class="flex mt-4">
                <div class="w-1/4 font-bold text-right pr-4">Name</div>
                <div v-if="isEditModeEnabled" class="flex-grow-0 basis-3/4"><input class="w-full border border-gray-500 p-2" v-model="form.name"></div>
                <div v-else class="flex-grow-0 basis-3/4">{{ libraryItem.name }}</div>
            </div>
            <div class="flex mt-4">
                <div class="w-1/4 font-bold text-right pr-4">Typ</div>
                <div>{{ libraryItem.type_label }}</div>
            </div>
            <div class="flex mt-4">
                <div class="w-1/4 font-bold text-right pr-4">Autor</div>
                <div v-if="isEditModeEnabled"><select v-model="form.author_id">
                    <option v-for="(author_name, id) in authors" :value="id">{{ author_name }}</option>
                </select></div>
                <div v-else>{{ libraryItem.author.full_name }} (<a href="">{{ libraryItem.author.email }}</a>)</div>
            </div>
            <div class="flex mt-4">
                <div class="w-1/4 font-bold text-right pr-4">Popis</div>
                <div v-if="isEditModeEnabled" class="flex-grow-0 basis-3/4"><textarea name="type" class="w-full" v-model="form.description"></textarea></div>
                <div v-else class="flex-grow-0 basis-3/4">{{ libraryItem.description }}</div>
            </div>
            <template v-for="(label, property) in libraryItem.borrowable.custom_data_labels">
                <div class="flex mt-4">
                    <div class="w-1/4 font-bold text-right pr-4">{{label}}</div>
                    <div v-if="isEditModeEnabled" class="flex-grow-0 basis-3/4"><input class="w-full border border-gray-500 p-2" v-model="form[`borrowable.${property}`]"></div>
                    <div v-else class="flex-grow-0 basis-3/4">{{ libraryItem.borrowable[property] }}</div>
                </div>
            </template>
        </form>
    </Layout>
</template>

<style>

</style>
