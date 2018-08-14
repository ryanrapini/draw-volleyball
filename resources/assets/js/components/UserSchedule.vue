<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Upcoming Games</div>

                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">League</th>
                                <th scope="col">Game Info</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr v-for="game in games">
                            <td>{{ game.date }}</td>
                            <td>{{ game.time }}</td>
                            <td>{{ game.league }}</td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    props: ['teams'],
    mounted () {
        console.log(this.teams)
        // Do something useful with the data in the template
    }
}
</script>
