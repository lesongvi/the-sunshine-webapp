<!--
Thẻ script setup sẽ giúp chúng ta viết Vue 3 theo kiểu Composition API, một file sẽ bao gồm các thẻ chính như sau:
- script setup: Chứa các biến, hàm, lifecycle hook của component. Là phần chúng ta sẽ định nghĩa logic cho component.
- template: Chứa các thẻ HTML, chúng ta sẽ design giao diện ở đây.
- style: Chứa CSS, chúng ta sẽ viết CSS để bổ trợ định dạng cho giao diện ở đây.
-->
<script setup>
// Ở đầu file chúng ta sẽ import các thư viện cần thiết, trong trường hợp này chúng ta sử dụng Head từ thư viện inertiajs/vue3 để thêm title cho trang.
import Article from '@/Components/Blog/Article.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted, onUnmounted } from 'vue';

// props viết tắt của properties (các thuộc tính), chứa các thuộc tính của một component. Chúng ta define props để nhận dữ liệu từ component cha.
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

// ref là một hàm giúp chúng ta tạo ra một biến có thể reactivity, tức là khi giá trị của biến thay đổi thì giao diện sẽ tự động cập nhật.
const category = ref('Blog test');
const today = ref('');
const blogTitle = ref('Y Tach first page ever!');
const blogThumbnail = ref('https://cdn3.notevn.com/P3ZHbVwWC.png');

// onMounted là một hàm giúp chúng ta chạy một hàm nào đó khi component được render xong. Đây là một trong những lifecycle hook của Vue 3.
onMounted(() => {
    today.value = new Date().toDateString();
});

// Tương tự như onMounted, onUnmounted là một hàm giúp chúng ta chạy một hàm nào đó khi component bị unmounted (tức là bị xóa khỏi DOM). Ví dụ như
// khi người dùng chuyển qua một trang khác, thoát khỏi trang web, hoặc đơn giản là làm mới trang.
// Danh sách các lifecycle hook của Vue 3: https://vuejs.org/api/composition-api-lifecycle.html
onUnmounted(() => {
    alert('Tach chào tạm biệt bạn!');
});
</script>

<template>

    <!--Gọi ra component HEAD và truyền vào prop title là "Welcome", vậy nên khi trang được render, title của trang sẽ là "Welcome"-->

    <Head title="Welcome" />

    <!--Chúng ta sẽ viết giao diện ở đây-->
    <main class="bg-dark relative z-10 pt-24 lg:pt-28 min-h-screen overflow-hidden">
        <div class="py-28 text-white rounded-b-2xl">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <Article :articleCategory="category" :articleCreatedTime="today" :articleImage="blogThumbnail"
                        articleSlug="welcome" :articleTitle="blogTitle" />
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
/* Định nghĩa CSS cho component, những style ở đây sẽ chỉ áp dụng cho component này.
Vì vậy nên nó được gọi là scoped CSS. */
.main {
    background-color: #f0f0f0;
}
</style>
