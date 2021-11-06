<template>
  <section class="content">
    <div class="container-fluid">
      <el-row :gutter="25">
        <el-col :span="8">
          <el-row style="text-align: center">
            9901 本部テスト環境本部テスト環境店
          </el-row>
          <el-row>
            <vue-cal
              @view-change="viewDate"
              class="vuecal--blue-theme"
              xsmall
              :time="false"
              hide-view-selector
              hideBody
              transitions
              active-view="day"
              :disable-views="['years', 'year', 'month', 'week']"
              locale="ja"
            />
          </el-row>
        </el-col>
        <el-col :span="8">
          <el-card
            style="background-color: #e3e3e3"
            shadow="none"
            :body-style="{ padding: '13px' }"
            align="center"
          >
            <span style="font-size: 22px">本日の注文数：511/523</span>
          </el-card>
        </el-col>
        <el-col :span="8">
          <el-row>
            <el-col :span="15">
              現在時刻：<span
                >{{ dateTime.year }}/{{ dateTime.month }}/{{
                  dateTime.date
                }}</span
              >
            </el-col>
            <el-col :span="9">
              <div>
                {{ dateTime.hours }}:{{ dateTime.minutes }}:{{
                  dateTime.seconds
                }}
              </div>
            </el-col>
          </el-row>
          <el-row>
            <el-col :span="15" style="line-height: 3">
              最終更新：<span>2021/10/25 11:12:30</span>
            </el-col>
            <el-col :span="9">
              <button
                type="button"
                class="btn btn-tool"
                style="line-height: 1; border: solid"
              >
                <i class="fas fa-redo-alt"></i>
              </button>
            </el-col>
          </el-row>
        </el-col>
      </el-row>
      <el-row
        :gutter="5"
        style="width: 95%; padding-left: 25%"
        class="row-padding"
      >
        <el-col :span="6">
          <el-button class="hours-time">10:00〜13:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time">14:00〜17:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time">18:00〜21:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time">22:00</el-button>
        </el-col>
      </el-row>
      <!-- <el-row style="padding-top: 7px"> -->
        <!-- <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th></th>
                <th>33/35</th>
                <th>33/35</th>
                <th>33/35</th>
                <th>33/35</th>
                <th>33/35</th>
              </tr>
              <tr>
                <th>商品</th>
                <th>10:00〜</th>
                <th>11:00〜</th>
                <th>12:00〜</th>
                <th>13:00〜</th>
                <th>合計</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>極〈きわみ〉</td>
                <td>
                  <el-button
                    class="btn-primary-pos"
                    @click="calculatorVisible = true"
                  >
                    100/100
                  </el-button>
                </td>
                <td>
                  <el-button class="btn-primary-pos"> 100/100 </el-button>
                </td>
                <td>
                  <el-button class="btn-primary-pos"> 100/100 </el-button>
                </td>
                <td>
                  <el-button class="btn-primary-pos"> 100/100 </el-button>
                </td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>匠〈たくみ〉</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>はまっこドリンクセット</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>あああああああああああ あああああああああ２２</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品99</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品12</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品23</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品45</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品67</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>極〈きわみ〉</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>匠〈たくみ〉</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>はまっこドリンクセット</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>あああああああああああ あああああああああ２２</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品99</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
              <tr>
                <td>商品12</td>
                <td>極〈きわみ〉</td>
                <td>匠〈たくみ〉</td>
                <td>はまっこドリンクセット</td>
                <td>あああああああああああ あああああああああ２２</td>
                <td>33/35</td>
              </tr>
            </tbody>
          </table>
        </div> -->
      <!-- </el-row> -->
      <el-row class="row-padding">

        <el-table
          height="450"
          :data="commandTable"
          style="width: 100%">
          <el-table-column label="" width="200">
            <el-table-column label="商品" prop="item_code">
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="10:00〜" prop="production_num" :formatter="formatterTen">
              <template slot-scope="scope">
                  <el-button 
                    size="medium"
                    class="btn-primary-pos"
                    @click="calculatorVisibleFunc(scope.row)"
                  >
                    {{scope.row.production_num_user}}/{{scope.row.production_num_serve}}
                  </el-button>                
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="11:00〜" prop="production_num" :formatter="formatterEleven"></el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="12:00〜" prop="production_num" :formatter="formatterTwelve"></el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="13:00〜" prop="production_num" :formatter="formatterThirteen"></el-table-column>
          </el-table-column>
          <el-table-column label="511/535">
            <el-table-column label="合計" fixed prop="production_num" :formatter="formatterThirteen"></el-table-column>
          </el-table-column>
        </el-table>

      </el-row>
      <el-dialog
        title="「商品名」の製造数を入力"
        :visible.sync="calculatorVisible"
        width="30%"
      >
        <Calculator :detail="num_user"></Calculator>
      </el-dialog>
    </div>
  </section>
</template>


<style>
@import url("//unpkg.com/element-ui@2.15.6/lib/theme-chalk/index.css");

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
import Calculator from "./Calculator.vue"
// import VueScrollingTable from "vue-scrolling-table";
// import "vue-scrolling-table/dist/style.css";

const date = new Date();

export default {
  components: { VueCal, DateTime, Calculator },
  data() {
    return {
      commandTable: [],
	  addtominus: false,
      calculatorVisible: false,
      num_user: null,
      columns: [
        { field: "name", key: "a", title: "Name", align: "center" },
        { field: "date", key: "b", title: "Date", align: "left" },
        { field: "hobby", key: "c", title: "Hobby", align: "right" },
        { field: "address", key: "d", title: "Address" },
      ],
      tableData: [
        {
          name: "John",
          date: "1900-05-20",
          hobby: "coding and coding repeat",
          address: "No.1 Century Avenue, Shanghai",
        },
        {
          name: "Dickerson",
          date: "1910-06-20",
          hobby: "coding and coding repeat",
          address: "No.1 Century Avenue, Beijing",
        },
        {
          name: "Larsen",
          date: "2000-07-20",
          hobby: "coding and coding repeat",
          address: "No.1 Century Avenue, Chongqing",
        },
        {
          name: "Geneva",
          date: "2010-08-20",
          hobby: "coding and coding repeat",
          address: "No.1 Century Avenue, Xiamen",
        },
        {
          name: "Jami",
          date: "2020-09-20",
          hobby: "coding and coding repeat",
          address: "No.1 Century Avenue, Shenzhen",
        },
      ],
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
    calculatorVisibleFunc(data){
      this.calculatorVisible = true;
      this.num_user = data;
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
