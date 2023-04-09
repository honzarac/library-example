<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import { Head } from '@inertiajs/vue3';
    import LibraryItemRow from "@/Components/LibraryItemRow.vue";

    defineProps({
        libraryItems: Object,
    })
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <h3 class="text-center font-bold">Tituly k vypůjčení</h3>
                <div class="items-grid grid gap-4 w-full">
                    <LibraryItemRow v-for="libraryItem in libraryItems.data" :library-item="libraryItem"></LibraryItemRow>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style>
    .items-grid {
        grid-template-columns: 60% 20% 20%;
    }
</style>
