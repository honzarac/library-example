<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import { Head } from '@inertiajs/vue3';
    import LibraryItemRow from "@/Components/LibraryItemRow.vue";
    import { TailwindPagination } from 'laravel-vue-pagination';
    import { router } from "@inertiajs/vue3"
    import {ref} from "vue";

    let props = defineProps({
        libraryItems: Object,
        query: String,
    })

    function getResults(page = 1) {
        router.get(`/`, {page});
    }

    let query = ref(props.query)
    function search() {
        router.get('/', {query: query.value})
    }
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <h3 class="text-center font-bold">Tituly k vypůjčení</h3>

        <br>
        <div class="flex my-6 w-full">
            <div class="flex-grow"><input class="w-full border border-gray-300 p-4" placeholder="Hledat v titulech..." v-model="query"></div>
            <button @click="search" class="rounded bg-blue-500 text-white p-2.5 hover:bg-blue-600 float-right mx-2 cursor-pointer">Hledat</button>
        </div>
        <br>
        <div class="items-grid grid gap-4 w-full">
            <LibraryItemRow v-for="libraryItem in libraryItems.data" :library-item="libraryItem"></LibraryItemRow>
        </div>
        <div class="flex justify-center mt-6">
            <TailwindPagination :data="libraryItems" @pagination-change-page="getResults"></TailwindPagination>
        </div>
    </Layout>
</template>

<style>
    .items-grid {
        grid-template-columns: 50% minmax(100px, 1fr) minmax(100px, 1fr) minmax(60px, 1fr);
    }
</style>
