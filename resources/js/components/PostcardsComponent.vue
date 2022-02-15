<template>
    <div class="container-postcards">
        <table border="1">
            <tr>
                <th>Sender</th>
                <th>Address</th>
                <th>Text</th>
                <th>Image</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{ postcard.sender }}</td>
                <td>{{ postcard.address }}</td>
                <td>{{ postcard.text }}</td>
                <td v-if="postcard.image">
                    <img :src="'/storage/postcards/' + postcard.image" :alt="postcard.sender">
                </td>
                <td v-else>
                    <span>
                        no-image
                    </span>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                postcards: []
            }
        },
        mounted() {
            
            axios.get('/api/postcards/list')
                 .then(r => {
                     this.postcards = r.data;
                 })
                 .catch(e => console.error(e))
        }
    }
</script>
