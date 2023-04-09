<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <h1 class="text-3xl">KNIHOVNA</h1>
        </div>

        <div
            class="w-full max-w-6xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden"
        >
            <slot />
        </div>
    </div>
</template>
