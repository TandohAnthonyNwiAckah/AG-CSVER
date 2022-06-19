<template>
    <div class="main-page">
        <template v-if="showHeader">
            <q-card  :flat="isSubPage" class="page-section q-py-sm q-px-md q-mb-md nice-shadow-18" >
                <div class="container">
                    <div class="row justify-between q-col-gutter-md">
                        <div class="col-12 col-md-auto " >
                            <div class="" >
                                <div class="row  items-center q-col-gutter-sm q-px-sm">
                                    <div class="col">
                                        <div class="text-h6 text-primary">Add New Countries</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </q-card>
        </template>
        <section class="page-section " >
            <div class="container">
                <div class="row q-col-gutter-x-md">
                    <div class="col-md-9 col-12 comp-grid" >
                        <q-card  :flat="isSubPage" class="q-pa-md nice-shadow-18">
                            <div >
                                <ValidationObserver ref="observer" v-slot="{ invalid }" tag="form" @submit.prevent="startSaveRecord()" @reset="resetForm">
                                    <div class="row q-col-gutter-x-md">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Id *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Id" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlid" v-model.trim="formData.id"  label="Id" type="number" placeholder="Enter Id"   step="any"    
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Continent Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Continent Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlcontinent_code" v-model.trim="formData.continent_code"  label="Continent Code" type="text" placeholder="Enter Continent Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Currency Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Currency Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlcurrency_code" v-model.trim="formData.currency_code"  label="Currency Code" type="text" placeholder="Enter Currency Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Iso2 Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Iso2 Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrliso2_code" v-model.trim="formData.iso2_code"  label="Iso2 Code" type="text" placeholder="Enter Iso2 Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Iso3 Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Iso3 Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrliso3_code" v-model.trim="formData.iso3_code"  label="Iso3 Code" type="text" placeholder="Enter Iso3 Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Iso Numeric Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Iso Numeric Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrliso_numeric_code" v-model.trim="formData.iso_numeric_code"  label="Iso Numeric Code" type="text" placeholder="Enter Iso Numeric Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Fips Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Fips Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlfips_code" v-model.trim="formData.fips_code"  label="Fips Code" type="text" placeholder="Enter Fips Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Calling Code *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Calling Code" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlcalling_code" v-model.trim="formData.calling_code"  label="Calling Code" type="text" placeholder="Enter Calling Code"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Common Name *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Common Name" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlcommon_name" v-model.trim="formData.common_name"  label="Common Name" type="text" placeholder="Enter Common Name"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Official Name *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Official Name" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlofficial_name" v-model.trim="formData.official_name"  label="Official Name" type="text" placeholder="Enter Official Name"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Endonym *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Endonym" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrlendonym" v-model.trim="formData.endonym"  label="Endonym" type="text" placeholder="Enter Endonym"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-3 col-12">
                                                    Demonym *
                                                </div>
                                                <div class="col-sm-9 col-12">
                                                    <ValidationProvider :rules="{required:true}" name="Demonym" v-slot="{ errors, invalid, validated }">
                                                        <q-input outlined dense  ref="ctrldemonym" v-model.trim="formData.demonym"  label="Demonym" type="text" placeholder="Enter Demonym"      
                                                        class="" :error="invalid && validated" :error-message="errors[0]">
                                                        </q-input>
                                                    </ValidationProvider>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="showSubmitButton" class="text-center q-my-md">
                                        <q-btn type="submit"    :rounded="false"  color="primary"  no-caps  unelevated   :disabled="invalid" icon-right="send" :loading="saving">
                                            <q-spinner-oval slot="loading" /> Submit
                                        </q-btn>
                                    </div>
                                </ValidationObserver>
                                <slot :submit="submit" :saving="saving"></slot>
                            </div>
                        </q-card>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
	import { PageMixin } from "../../mixins/page.js";
	import { AddPageMixin } from "../../mixins/addpage.js";
	import { mapActions, mapGetters, mapState } from "vuex";
	export default {
		name: 'addCountriesPage',
		components: {
		},
		mixins: [PageMixin, AddPageMixin ],
		props:{
			pageName : {
				type : String,
				default : 'countries',
			},
			routeName : {
				type : String,
				default : 'countriesadd',
			},
			apiPath : {
				type : String,
				default : 'countries/add',
			},
		},
		data() {
            return {
				formData: {
					id: "", continent_code: "", currency_code: "", iso2_code: "", iso3_code: "", iso_numeric_code: "", fips_code: "", calling_code: "", common_name: "", official_name: "", endonym: "", demonym: "", 
				},
			}
		},
		computed: {
			pageTitle:{
				get: function () {
					return "Add New Countries"
				}
			},
		},
		meta () {
			return {
				title: this.pageTitle
			}
		},
		methods: {
			...mapActions('countries', ['saveRecord']),
			async startSaveRecord(){
				const isFormValid = await this.$refs.observer.validate();
				if(isFormValid){
					this.saving = true;
					let payload = this.normalizedFormData();
					let url = this.apiUrl;
					let data = { url, payload  }
					this.saveRecord(data).then((response) => {
						this.record = response.data ?? {};
						this.id = this.record['id'] ?? null;
						this.saving = false;
						this.resetForm();
						this.closeDialogs();// close page dialog that if opened
						this.flashMsg(this.msgAfterSave);
						this.$emit("submitted", this.record);
						if(this.redirect) this.navigateTo(`/countries`);
					},
					 (response) => {
						this.saving = false;
						this.showPageRequestError(response);
					});
				}
			},
			resetForm (){
				this.formData = {id: "", continent_code: "", currency_code: "", iso2_code: "", iso3_code: "", iso_numeric_code: "", fips_code: "", calling_code: "", common_name: "", official_name: "", endonym: "", demonym: "", };
				requestAnimationFrame(() => {
					this.$refs.observer.reset();
				});
				this.updateFormData();
				this.$EventBus.$emit("resetForm");
			},
		},
		watch: {
		},
		async mounted() {
		},
		async created() {
		},
	};
</script>
<style scoped>
</style>
