<template>
    <div class="chat-message-autor">
        <p>{{ message.message }}</p>
        <small>{{ message.user.name }}</small>
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>

<style lang="css">
    .chat-message-autor {
        border-bottom: 1px solid red;
    }
</style>