<template>
    <section>
        <b-navbar>
            <template slot="brand">
                <b-navbar-item tag="router-link" :to="{ path: '/' }">
                    <img
                        src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
                        alt="Lightweight UI components for Vue.js based on Bulma"
                    >
                </b-navbar-item>
            </template>
            <template slot="start">
                <b-navbar-item tag="router-link" :to="{ path: '/' }">
                    Home
                </b-navbar-item>
                <b-navbar-dropdown label="Info">
                    <b-navbar-item href="#">
                        About
                    </b-navbar-item>
                    <b-navbar-item href="#">
                        Contact
                    </b-navbar-item>
                </b-navbar-dropdown>
            </template>

            <template slot="end">
                <b-navbar-item tag="div">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </b-navbar-item>
            </template>
        </b-navbar>

        <body>
            <section class="section">
                <!-- <div class="container"> -->
                    <!-- <h1 class="title">Welcome</h1>
                    <h2 class="subtitle">
                        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
                    </h2> -->
                    <router-view></router-view>
                <!-- </div> -->
            </section>
        </body>

        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                <strong>Free Temp</strong> by <a href="https://jgthms.com">Dimas P Andrianto</a>.
                <!-- <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>. -->
                </p>
            </div>
        </footer>
    </section>
</template>
 
<script>
    export default {
        name: "App"
    }
</script>
 
<style>
    .container .navbar-item {
        cursor: pointer;
        text-decoration: underline;
    }
    h1 {
        color:blue;
    }
</style>