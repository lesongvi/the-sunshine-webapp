<!--
 Copyright 2025 lesongvi

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     https://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->
<template>
    <article class="col-span-1 relative group text-center">
        <div class="relative overflow-hidden rounded-lg mb-8">
            <img alt="Y Tach first page ever!" loading="lazy" width="620" height="500"
                class="group-hover:scale-110 group-hover:-rotate-1 object-cover w-full rounded-lg group-hover:brightness-75 bg-gray-200"
                :src="articleImage">
        </div>
        <div class="px-2 sm:px-6 transition-all duration-500 group-hover:opacity-60">
            <div class="flex flex-wrap items-center justify-center mb-4 space-x-5">
                <span class="inline-block text-sm rounded-full bg-gray-200 px-3 py-1 capitalize text-black">
                    {{ articleCategory }}
                </span>
                <span class="opacity-75 text-sm">{{ articleCreatedTime }}</span>
            </div>
            <h3 class="text-xl md:text-2xl leading-tight">
                <Link :to="'#/blog/' + articleSlug" class="article-title">
                {{ articleTitle }}
                </Link>
            </h3>
        </div>
    </article>
</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

// Định nghĩa props để nhận dữ liệu từ component cha
defineProps({
    articleCategory: {
        type: String,
        required: true,
    },
    articleCreatedTime: {
        type: String,
        required: true,
    },
    articleImage: {
        type: String,
        required: true,
    },
    articleSlug: {
        type: String,
        required: true,
    },
    articleTitle: {
        type: String,
        required: true,
    },
});
</script>
<style scoped>
.article-title {
    color: #fff;
    font-weight: bold;
}
</style>
