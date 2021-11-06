<template>
  <section class="content">
		<el-card style="border: inset; background-color:rgb(112 112 112 / 45%); color: black; text-align: center; font-size: 40px; height: 100px">
      <span style="position: absolute; left: 35px;">{{ operator }}</span>{{ rltNum }}
		</el-card>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="5">
				<button @click="key(1)" class="btn-cal-num">1</button>
			</el-col>
			<el-col :span="5">
				<button @click="key(2)" class="btn-cal-num">2</button>
			</el-col>
			<el-col :span="5">
				<button @click="key(3)" class="btn-cal-num">3</button>
			</el-col>
			<el-col :span="9">
				<button @click="upOne()" class="btn-cal-num"><i class="fas fa-play" style="transform: rotate(270deg);"></i></button>
			</el-col>
		</el-row>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="5">
				<button @click="key(4)" class="btn-cal-num">4</button>
			</el-col>
			<el-col :span="5">
				<button @click="key(5)" class="btn-cal-num">5</button>
			</el-col>
			<el-col :span="5">
				<button @click="key(6)" class="btn-cal-num">6</button>
			</el-col>
			<el-col :span="9">
				<button @click="downOne()" class="btn-cal-num"><i class="fas fa-play" style="transform: rotate(90deg);"></i></button>
			</el-col>
		</el-row>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="15">
				<el-row :gutter="10">
					<el-col :span="8">
						<button @click="key(7)" class="btn-cal-num">7</button>
					</el-col>
					<el-col :span="8">
						<button @click="key(8)" class="btn-cal-num">8</button>
					</el-col>
					<el-col :span="8">
						<button @click="key(9)" class="btn-cal-num">9</button>
					</el-col>
				</el-row>
				<el-row :gutter="10" class="row-padding">
					<el-col :span="8">
						<button @click="clearAll()" class="btn-cal-num">C</button>
					</el-col>
					<el-col :span="8">
						<button @click="key(0)" class="btn-cal-num">0</button>
					</el-col>
					<el-col :span="8">
						<button v-if="addtominus" @click="elclickAdd()" class="btn-cal-num">+</button>
						<button v-else @click="elclickAdd()" class="btn-cal-num">ー</button>
					</el-col>
				</el-row>
			</el-col>
			<el-col :span="9">
				<el-row>
					<button @click="elclick()" style="height: 105px; font-size: 30px" class="btn-cal-num">登録</button>
				</el-row>
			</el-col>
			
		</el-row>
  </section>
</template>


<style>
.btn-cal-num {
	background-color: #5A5A5A;
	color: white; 
	height: 45px;
	text-align: center; 
	font-size: 24px;
	font-weight: bold; 
	width: 100%; 
	border: 0
}

.btn-primary-pos {
  background-color: #eaeaea;
  border-color: #646464 #646464 #646464;
  color: #000000;
  flex-grow: 1;
}

.btn-primary-pos:hover,
.btn-primary-pos.hover {
  background-color: #efefef;
  border-color: #efefef;
  color: #707070;
}

.el-button:focus, .el-button:hover{
	background-color: #1f2d3d;
}

.content-wrapper {
  background-color: white;
}
.detail-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 10px;
  white-space: pre-wrap;
}

.hours-time {
  width: 100%;
}

.row-padding {
  padding-top: 15px;
}
/* .vuecal__body{
    display: none;
  } */

</style>
<script>
import VueCal from "vue-cal";
import "vue-cal/dist/vuecal.css";
import "vue-cal/dist/i18n/ja.js";
import { DateTime } from 'luxon';

// import VueScrollingTable from "vue-scrolling-table";
// import "vue-scrolling-table/dist/style.css";

const date = new Date();

export default {
  components: { VueCal, DateTime },
  props: {
    detail: {
      type: Object,
      default: () => {
        return {};
      },
    },
  },
  data() {
    return {
      operator: '',
      rltNum: this.detail.production_num_user,
      commandTable: [],
	    addtominus: false,
      calculatorVisible: false,
      num_user: null,

      dateTime: {
        year: date.getFullYear(),
        month: date.getMonth() + 1,
        date: date.getDate(),
        hours: date.getHours(),
        minutes: date.getMinutes(),
        seconds: date.getSeconds(),
      },
      timer: undefined,
      tags: {},
      form: new Form({
        id: "",
        name: "",
      }),
    };
  },
  methods: {
    upOne(){
      this.rltNum = Number(this.rltNum) + 1;
    },
    downOne(){
      this.rltNum = Number(this.rltNum) - 1;
    },
    clearAll(){
      this.rltNum = '';
      this.operator = '';
    },
    key(num){
      if(this.operator == '+'){
        this.rltNum = Number(this.rltNum) + num;
      } else if(this.operator == '-'){
        this.rltNum = Number(this.rltNum) - num;
      } else{
        this.rltNum = String(this.rltNum) + num;
      }
    },
    formatterTen(row, column){
      if(row.production_time_code >= 10 && row.production_time_code < 11){
        return row.production_num_user;
      } else {
        return 0;
      }
    },

    formatterEleven(row){
      if(row.production_time_code >= 10 && row.production_time_code < 11){
        return row.production_num_user;
      } else {
        return 0;
      }      
    },

    formatterTwelve(row){
      if(row.production_time_code >= 11 && row.production_time_code < 12){
        return row.production_num_user;
      } else {
        return 0;
      }      
    },

    formatterThirteen(row){
      if(row.production_time_code >= 12 && row.production_time_code < 13){
        return row.production_num_user;
      } else {
        return 0;
      }      
    },

    loadProductsCommand(){
      axios.get('api/productcommand').then(data => {
        console.log(data);
        this.commandTable = data.data;
      });
    },
              loadProducts(){

            // if(this.$gate.isAdmin()){
              axios.get("api/product").then(({ data }) => (
                // this.products = data.data
                 console.log(data)
              ));
            // }
          },
    viewDate(date, text){
      var stDate = date.startDate;
      stDate = stDate.toISOString();
      stDate = DateTime.fromISO(stDate).toFormat('yyyy-MM-dd');
      console.log(date.startDate);
      console.log(stDate);
    },
	elclickAdd(){
		this.addtominus = !this.addtominus;
      if(this.addtominus){
        this.operator = "-";
      } else{
        this.operator = "+";
      }
	},
	elclick(){
		alert("Dddd");
	},
    setDateTime() {
      const date = new Date();
      this.dateTime = {
        year: date.getFullYear(),
        month: date.getMonth() + 1,
        date: date.getDate(),
        hours: date.getHours(),
        minutes: date.getMinutes(),
        seconds: date.getSeconds(),
      };
    },
  },
  beforeMount() {
    this.timer = setInterval(this.setDateTime, 1000);
  },
  beforeUnmount() {
    clearInterval(this.timer);
  },
  mounted() {

  },
  created() {
    this.loadProductsCommand();
    // this.loadProducts();
  },
};
</script>
