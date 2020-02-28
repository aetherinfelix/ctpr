<template>
        
            <div class="content mt-4 pt-4">
                <div class="row" v-if="shown === 'Maxwell'">
                    <div class="col">

                        <b>Maxwell</b>

                         <b-form-group label="Beauty">
      <b-form-radio-group id="radio-group-2" v-model="maxwellBeauty" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
    <b-form-group label="Style">
      <b-form-radio-group id="radio-group-2" v-model="maxwellStyle" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
    <b-form-group label="Personality">
      <b-form-radio-group id="radio-group-2" v-model="maxwellPersonality" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
                    </div>
                </div>
<div class="row" v-if="shown === 'Bailey'">
                    <div class="col">

                        <b>Bailey</b>

                         <b-form-group label="Beauty">
      <b-form-radio-group id="radio-group-2" v-model="baileyBeauty" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
    <b-form-group label="Style">
      <b-form-radio-group id="radio-group-2" v-model="baileyStyle" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
    <b-form-group label="Personality">
      <b-form-radio-group id="radio-group-2" v-model="baileyPersonality" name="radio-sub-component">
        <b-form-radio value=1>1</b-form-radio>
        <b-form-radio value=2>2</b-form-radio>
        <b-form-radio value=3>3</b-form-radio>
        <b-form-radio value=4>4</b-form-radio>
        <b-form-radio value=5>5</b-form-radio>
      </b-form-radio-group>
    </b-form-group>
                    </div>
                </div>
            
            <!--button group-->
            <b-button variant="secondary" class="text-right" @click.prevent="next()">Next</b-button>
            </div>
        
    </template>
    <script>
        export default {
            data: function () {
                return {
                    shown: 'Maxwell',
                    maxwellBeauty: 1,
                    maxwellStyle: 1,
                    maxwellPersonality: 1,
                    baileyBeauty: 1,
                    baileyStyle: 1,
                    baileyPersonality: 1,
                }

        },
        methods:{
            next(){
                if (this.shown === 'Maxwell'){
                    this.shown === 'Bailey'
                }
            }
        }
        }
    </script>
    <style scoped>
        
    </style>