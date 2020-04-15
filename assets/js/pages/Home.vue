<template>
    <div class="columns">
        <div class="column is-2">
            <MySideBar></MySideBar>
        </div>
        <div class="column is-10">
            <nav class="breadcrumb is-small" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">Vue</a></li>
                    <li class="is-active"><a href="#">Beranda</a></li>
                </ul>
            </nav>
            
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child box">
                        <h1>Hard Coder</h1>
                        {{ data.hardCoder }}
                        </article>
                        <article class="tile is-child box">
                        <h1>Googling</h1>
                        {{ data.google }}
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                         <img
                            src="https://scontent.fsub8-1.fna.fbcdn.net/v/t1.0-9/396708_328437277190800_794009535_n.jpg?_nc_cat=103&_nc_sid=2c4854&_nc_eui2=AeHFQV32kFqSLszx05rg0GSfHphnITVrXDUemGchNWtcNcwmxcHtOPWb3bZK96zLDxY&_nc_ohc=QEVddWDZHRUAX9Dw1vl&_nc_ht=scontent.fsub8-1.fna&oh=a6c3a6d371e46b54cf1a6b4939c5225f&oe=5EBBCD1C"
                            alt="Lightweight UI components for Vue.js based on Bulma"
                        >
                        </article>
                    </div>
                    </div>
                    <div class="tile is-parent">
                    <article class="tile is-child box">
                        <h1>Please Wait</h1>
                        {{ data.sentence }}
                    </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                    <h1>Future</h1>
                    {{ data.words }}
                    </article>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MySideBar from '../components/MySideBar'
import axios from 'axios'
export default {
    name:"home",
    components: {
        MySideBar
    },
    data() {
        return {
                data : [],
            }
    },
    mounted() {
        const url = `/getdata`;
        axios.get(url).then(response => {
            this.data = response.data;
            this.notFound = false;
        }).catch(error => {
            if (error.response.status == 404) {
                this.notFound = true;
                this.message = error.response.data.message;
            }
        });
    }
};
</script>