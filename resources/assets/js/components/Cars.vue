<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cars</div>

                    <div class="panel-body">
                        <h3>Add Car</h3>
                        <form action="#" @submit.prevent="addCar()">
                            <div class="input-group">
                                <input v-model="car.body" type="text" name="body" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </span>
                            </div>
                        </form>
                        <h3>Car List</h3>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="car in list">
                                {{car.body}}
                                <button @click="deleteCar(car.id)" class="btn btn-danger">Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data:function() {
            return {
                list: [],
                car:{
                    id:'',
                    body:''
                }
            };
        },

        created: function() {
            this.fetchCarList();
        },

        methods: {
            fetchCarList: function() {
                this.$http.get('api/cars').then(function(response) {
                    this.list = response.data
                });
            },
            addCar: function() {
                this.$http.post('api/car/store', this.car);
                this.car.body = '';
                this.fetchCarList();
            },
            deleteCar: function(id) {
                this.$http.delete('api/car/' + id);
                this.fetchCarList();
            }
        }
    }
</script>
