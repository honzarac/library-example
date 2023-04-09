<script setup>
    import Layout from '@/Layouts/Layout.vue';
    import { Head } from '@inertiajs/vue3';
    import LibraryItemRow from "@/Components/LibraryItemRow.vue";
    import { TailwindPagination } from 'laravel-vue-pagination';
    import { router } from "@inertiajs/vue3"

    defineProps({
        libraryItems: Object,
    })

    function getResults(page = 1) {
        router.get(`/`, {page});
    }
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <h3 class="text-center font-bold">Tituly k vypůjčení</h3>
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
