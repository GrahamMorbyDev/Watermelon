<template>
    <div>
    <div>
        <b-modal ref="myModalRef" hide-footer title="Using Component Methods">
            Hello From Modal!
        </b-modal>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h3>Welcome To Our Store</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-sm btn-success pull-right">View Cart</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div v-for="infos in info">
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="http://keenthemes.com/assets/bootsnipp/k1.jpg" class="img-responsive"
                                     alt="Berry Lace Dress">
                                <div>
                                    <a href="#" class="btn">Zoom</a>
                                    <a @click="showModal()" class="btn">View</a>
                                </div>
                            </div>
                            <h3><a href="#">{{infos.title}}</a></h3>
                            <div class="pi-price">${{infos.price}}</div>
                            <a href="javascript:" class="btn add2cart">Add to cart</a>
                            <div class="sticker sticker-new"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>

    import BootstrapVue from 'bootstrap-vue'
    import bModal from 'bootstrap-vue/es/components/modal/modal'
    Vue.use(BootstrapVue);

    export default {
        components: {
            bModal,
        },
        data() {
            return {
                info: [],
                modalShow: false
            }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('/store/get/products')
                .then(response => (this.info = response.data)).catch(error => console.log(error))
        },
        methods: {
            showModal () {
                this.$refs.myModalRef.show();
                console.log('here');
            },
            hideModal () {
                this.$refs.myModalRef.hide()
            }},
    }
</script>
