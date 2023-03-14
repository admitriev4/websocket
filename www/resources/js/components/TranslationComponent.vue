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
console.log('test123')

export default {
    props: ['translation_id'],
    data() {
        return {
            messages: []
        }
    },

    created() {
        console.log(this.translation_id)
        Echo.channel(`translation.${this.translation_id}`)
            .listen('MessageSend', (e) => {
                console.log('eeeeeeee')
                this.messages.push(e)
            });
    }
}
</script>

<style scoped></style>

