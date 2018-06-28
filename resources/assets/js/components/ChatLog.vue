<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
        <div class="empty" v-show="messages.length === 0">
            Insira um texto!
        </div>
    </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>

<style scoped>
    .empty {
        padding: 1rem;
        text-align: center;
    }
</style>