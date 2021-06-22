<template>
<div>
    <agile :options="myOptions" :initial-slide="0" :autoplay-speed="5000" :speed="2500" infinite fade pause-on-hover pause-on-dots-hover autoplay>
        <div class="slide-banner" v-for="(item, index) in banner">
            <!-- <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" v-bind:src="item.url" allowfullscreen></iframe>
            </div> -->
            <img v-bind:src="item.url" v-bind:alt="item.text">
        </div>
        <template slot="prevButton"><i class="fa fa-angle-left"></i></template>
        <template slot="nextButton"><i class="fa fa-angle-right"></i></template>
    </agile>
</div>
</template>

<script>
    // import { VueAgile } from 'vue-agile'

    export default {
        components: {
            agile: VueAgile
        },
        props: ['banner'],
        data () {
            return {
                myOptions: {
                    navButtons: false,

                    responsive: [
                        {
                            breakpoint: 600,
                            settings: {
                                dots: false
                            }
                        },

                        {
                            breakpoint: 900,
                            settings: {
                                navButtons: true,
                                dots: true,
                                infinite: false
                            }
                        }
                    ]
                }
            }
        }
    }
</script>
<style media="screen">
    /* // Slides styles */
    .slide-banner {
        display: flex;
        align-items: center;
        justify-content: center;
        object-fit: cover;
        height: 90vh;
    }
    @media only screen and (max-width: 600px) {
        .slide-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
            object-fit: cover;
            width: 100%;
        }
    }
</style>
