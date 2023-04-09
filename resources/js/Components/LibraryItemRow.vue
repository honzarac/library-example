<script setup>
    import { Link } from '@inertiajs/vue3';

    defineProps({
        libraryItem: Object
    })
</script>

<template>
    <div>
        {{ libraryItem.name }}
    </div>
    <div class="text-gray-400">
        {{ libraryItem.author.full_name }}
    </div>
    <div>
        {{ libraryItem.type_label }}
    </div>
    <div class="text-right">
        <Link :href="`/library-item/${libraryItem.id}`" class="rounded bg-gray-100 p-2.5 hover:bg-gray-300">detail</Link>
    </div>
</template>
