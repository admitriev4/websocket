<template>
    <div class="alert alert-warning">
        <div v-if="messages.length < 1">
            Beginning translation...
        </div>
        <div v-else>
            <ul class="list-group" v-for="message in messages">
                <li class="list-group-item">
                    {{ message.message }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            messages: []
        }
    },
    mounted() {
        Echo.channel('translation').listen('MessageSend', (e) => {
                this.messages.push(e)
        });
    }
}
</script>

