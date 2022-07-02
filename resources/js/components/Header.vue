<template>
    <div>
        <b-nav tabs justified>
            <b-nav-item v-for="link in links">
                <router-link :to="link.href">{{ link.title }}</router-link>
            </b-nav-item>
        </b-nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                links: [
                    {
                        title: "Главная",
                        href: "/index"
                    },
                    {
                        title: "Блог",
                        href: "/blog"
                    },
                    {
                        title: "Создать пост",
                        href: "/create"
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
