<template>
    <div>

        <!-- Nav bar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <router-link :to="{name: 'home'}" class="navbar-brand">Big Store</router-link>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <router-link :to="{ name: 'login' }"  v-if="!isLoggedIn">Login</router-link>
                        <router-link :to="{ name: 'register' }"  v-if="!isLoggedIn">Register</router-link>
                        <span v-if="isLoggedIn">
                            <router-link :to="{ name: 'userboard' }"  v-if="user_type == 0"> Hi, {{name}}</router-link>
                            <router-link :to="{ name: 'admin' }"  v-if="user_type == 1"> Hi, {{name}}</router-link>
                        </span>
                        <li  v-if="isLoggedIn" @click="logout"> Logout</li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Nav bar End -->
        <main class="py-4">
            <router-view @loggedIn="change"></router-view>
        </main>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                name: null,
                user_type: 0,
                isLoggedIn: localStorage.getItem('bigStore.jwt') != null
            }
        },
        mounted() {
            this.setDefaults()
        },
        methods : {
            setDefaults() {
                if (this.isLoggedIn) {
                    let user = JSON.parse(localStorage.getItem('bigStore.user'))
                    this.name = user.name
                    this.user_type = user.is_admin
                }
            },
            change() {
                this.isLoggedIn = localStorage.getItem('bigStore.jwt') != null
                this.setDefaults()
            },
            logout(){
                localStorage.removeItem('bigStore.jwt')
                localStorage.removeItem('bigStore.user')
                this.change()
                this.$router.push('/')
            }
        }
    }
</script>