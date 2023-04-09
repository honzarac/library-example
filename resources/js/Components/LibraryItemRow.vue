<script setup>
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
        detail
    </div>
</template>
