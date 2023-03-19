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
        console.log(Echo.channel('translation'))
        Echo.channel('translation').listen('MessageSend', (e) => {
                console.log('eeeeeeee')
                this.messages.push(e)
        });
    }

    /*mounted() {

        Echo.channel(`laravel_database_translation`)
            .listen('.MessageSend', (e) => {
                console.log('eeeeeeee')
                this.messages.push(e)
            });
    }*/
}
</script>

