<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-100">
        <!-- Navigation -->
        <div class="p-10 bg-gray-400">
            <Link :href="route('postcards.create')">
                Create Postcard
            </Link>
        </div>

        <div
            class="w-full mt-6 px-6 py-4 bg-gray-200 shadow-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
