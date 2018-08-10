<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Teams</div>

                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Notes</th>
                                <th scope="col">League</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr v-for="team in teams">
                            <td>{{ team.name }}</td>
                            <td>{{ team.notes }}</td>
                            <td>{{ team.league.name }}</td>
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
