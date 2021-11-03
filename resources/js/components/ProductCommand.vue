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
      <el-row style="padding-top: 7px">
        <table>
          <thead>
            <tr>
              <td></td>
              <td>33/35</td>
              <td>33/35</td>
              <td>33/35</td>
              <td>33/35</td>
              <td>33/35</td>
            </tr>
            <tr>
              <td>商品</td>
              <td>10:00〜</td>
              <td>11:00〜</td>
              <td>12:00〜</td>
              <td>13:00〜</td>
              <td>合計</td>
            </tr>
          </thead>
          <hr />
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
      </el-row>
      <el-dialog
        title="「商品名」の製造数を入力"
        :visible.sync="calculatorVisible"
        width="30%"
      >
		<el-card style="border: inset; background-color:rgb(112 112 112 / 45%); color: black; text-align: center; font-size: 40px">
			12
		</el-card>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">1</button>
			</el-col>
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">2</button>
			</el-col>
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">3</button>
			</el-col>
			<el-col :span="9">
				<button @click="elclick()" class="btn-cal-num"><i class="fas fa-play" style="transform: rotate(270deg);"></i></button>
			</el-col>
		</el-row>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">4</button>
			</el-col>
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">5</button>
			</el-col>
			<el-col :span="5">
				<button @click="elclick()" class="btn-cal-num">6</button>
			</el-col>
			<el-col :span="9">
				<button @click="elclick()" class="btn-cal-num"><i class="fas fa-play" style="transform: rotate(90deg);"></i></button>
			</el-col>
		</el-row>
		<el-row :gutter="10" class="row-padding">
			<el-col :span="15">
				<el-row :gutter="10">
					<el-col :span="8">
						<button @click="elclick()" class="btn-cal-num">7</button>
					</el-col>
					<el-col :span="8">
						<button @click="elclick()" class="btn-cal-num">8</button>
					</el-col>
					<el-col :span="8">
						<button @click="elclick()" class="btn-cal-num">9</button>
					</el-col>
				</el-row>
				<el-row :gutter="10" class="row-padding">
					<el-col :span="8">
						<button @click="elclick()" class="btn-cal-num">C</button>
					</el-col>
					<el-col :span="8">
						<button @click="elclick()" class="btn-cal-num">0</button>
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
      </el-dialog>
    </div>
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

table,
tr td {
  /* border:1px solid red */
}
tbody {
  display: block;
  height: 350px;
  overflow: auto;
}
thead,
tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}
thead {
  width: calc(100% - 1em);
}
table {
  width: 100%;
}
</style>
<script>
import VueCal from "vue-cal";
import "vue-cal/dist/vuecal.css";
import "vue-cal/dist/i18n/ja.js";
// import VueScrollingTable from "vue-scrolling-table";
// import "vue-scrolling-table/dist/style.css";

const date = new Date();

export default {
  components: { VueCal },
  data() {
    return {
	  addtominus: false,
      calculatorVisible: false,
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
  mounted() {},
  created() {},
};
</script>
