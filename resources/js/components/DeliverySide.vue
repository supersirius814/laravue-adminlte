<template>
  <section class="content">
    <div class="container-fluid">
      <el-row :gutter="25">
        <el-col :span="8" class="m-cal">
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
          <el-row :gutter="5">
            <el-col :span="18">
              <el-card
                style="background-color: #e3e3e3"
                shadow="none"
                :body-style="{ padding: '13px' }"
                align="center"
              >
                <span class="m-caption">本日の注文数：511/523</span>
              </el-card>
            </el-col>
            <el-col :span="6" style="padding-top: 10px">
              <button v-if="searchVisible" class="m-btn-search" @click="searchMode()">一覧モード</button>
              <button v-else class="m-btn-search" @click="searchMode()">検索モード</button>
            </el-col>
          </el-row>
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
            <el-col :span="15" class="m-updatetime">
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
      <el-row class="row-padding" style="overflow-x: auto">
        <table style="text-align: center; width: 1750px">
          <thead>
            <tr>
              <td colspan="4">
                <el-card class="card-total">32/35</el-card>
              </td>
              <td colspan="4">
                <el-card class="card-total">32/35</el-card>
              </td>
              <td colspan="4">
                <el-card class="card-total">32/35</el-card>
              </td>
            </tr>
            <tr>
              <td>10:00<span class="time-span">1/7</span></td>
              <td>10:15</td>
              <td>10:30</td>
              <td>10:45</td>
              <td>11:00</td>
              <td>11:15</td>
              <td>11:30</td>
              <td>11:45</td>
              <td>12:00</td>
              <td>12:15</td>
              <td>12:30</td>
              <td>12:45</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button class="item-card" @click="eventInput()">
                  <el-card>
                    <el-row style="text-align: left">店内</el-row>
                    <el-row style="white-space: pre-wrap"
                      >ニシオカアアアニシオカアアア 様<br />090-0000-0000
                    </el-row>
                  </el-card>
                </button>
              </td>
              <td>
                <button class="item-card-dt">
                  <el-card>
                    <el-row style="text-align: left">店内</el-row>
                    <el-row style="white-space: pre-wrap"
                      >ニシオカアアアニシオカアアア 様<br />090-0000-0000
                    </el-row>
                  </el-card>                 
                </button>
              </td>
              <td>10:30</td>
              <td>10:45</td>
              <td>11:00</td>
              <td>11:15</td>
              <td>11:30</td>
              <td>11:45</td>
              <td>12:00</td>
              <td>12:15</td>
              <td>12:30</td>
              <td>12:45</td>
            </tr>
            <tr>
              <td>
                <button class="item-card">
                  <el-card>
                    <el-row style="text-align: left">店内</el-row>
                    <el-row style="white-space: pre-wrap"
                      >ニシオカアアアニシオカアアア 様<br />090-0000-0000
                    </el-row>
                  </el-card>
                </button>
              </td>
              <td>
                <button class="item-card">
                  <el-card>
                    <el-row style="text-align: left">店内</el-row>
                    <el-row style="white-space: pre-wrap"
                      >ニシオカアアアニシオカアアア 様<br />090-0000-0000
                    </el-row>
                  </el-card>
                </button>
              </td>
              <td>10:30</td>
              <td>10:45</td>
              <td>11:00</td>
              <td>11:15</td>
              <td>11:30</td>
              <td>11:45</td>
              <td>12:00</td>
              <td>12:15</td>
              <td>12:30</td>
              <td>12:45</td>
            </tr>
          </tbody>
        </table>
      </el-row>
      <el-dialog width = "50%"
      :visible.sync="eventVisible"
      >
        <span slot="title">
          <table class="delivery-table">
              <tr>
                <th :xs="2" :sm="2" :md="2" :lg="2" :xl="2">受渡</th>
                <th :xs="3" :sm="3" :md="3" :lg="3" :xl="3">注文番号</th>
                <th :xs="11" :sm="11" :md="11" :lg="11" :xl="11">お名前/電話番号</th>
                <th :xs="2" :sm="2" :md="2" :lg="2" :xl="2">お支払</th>
                <th :xs="4" :sm="4" :md="4" :lg="4" :xl="4">受付日</th>
                <th :xs="2" :sm="2" :md="2" :lg="2" :xl="2">経路</th>
              </tr>

              <tr>
                <td>10:00</td>
                <td>4636</td>
                <td>西岡大輔 様<br/>090-0000-0000</td>
                <td>代済</td>
                <td>10月1日</td>
                <td>レジ</td>
              </tr>              

          </table>
        </span>
        <span slot="">
          <el-row :gutter="10">
              <el-button plain>
                まぐろ丼(1)
              </el-button>

              <el-button plain>
                本鮪大とろ丼(1)
              </el-button>

          </el-row>
        </span>
        <!-- <span slot="footer" class="dialog-footer"> -->
        <span slot="footer">
          <el-row :gutter="20">
            <el-col :span="17">
              <el-input
                type="textarea"
                v-model="textarea"
                :rows="3">
              </el-input>
            </el-col>
            <el-col :span="7">
              <el-button plain style="width: 100%; height: 5em">
                受け渡し
              </el-button>
            </el-col>
          </el-row>
        </span>
      </el-dialog>
      <el-dialog width="100%" height="800px" 
        :visible.sync="searchVisible"
        fullscreen  
      >
        <div class="content">
          <el-row :gutter="25">
            <el-col :span="8" class="m-cal">
              <el-row>
                9901 本部テスト環境本部テスト環境店
              </el-row>
              <el-row>
                <el-date-picker
                  style="width: 270px"
                  size="small"
                  range-separator="~"
                  v-model="value2"
                  type="daterange"
                  align="right"
                  unlink-panels
                >
                </el-date-picker>
              </el-row>
            </el-col>
            <el-col :span="8">
              <el-row :gutter="5">
                <el-col :span="18">
                  <el-card
                    style="background-color: #e3e3e3"
                    shadow="none"
                    :body-style="{ padding: '13px' }"
                    align="center"
                  >
                    <span class="m-caption">本日の注文数：511/523</span>
                  </el-card>
                </el-col>
                <el-col :span="6" class="m-search">
                  <button v-if="searchVisible" class="m-btn-search" @click="searchMode()">一覧モード</button>
                  <button v-else class="m-btn-search" @click="searchMode()">検索モード</button>
                </el-col>
              </el-row>
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
                <el-col :span="15" class="m-updatetime">
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
          <el-row class="row-padding form-font-size" :gutter="15">
            <el-col :span="4">
              <el-form :label-width="formLabelWidth">
                <el-form-item label="お名前">
                  <el-input></el-input>
                </el-form-item>
              </el-form>
            </el-col>
            <el-col :span="4">
              <el-form :label-width="formLabelWidth">
                <el-form-item label="電話番号">
                  <el-input></el-input>
                </el-form-item>
              </el-form>
            </el-col>            
            <el-col :span="4">
              <el-form :label-width="formLabelWidth">
                <el-form-item label="注文No.">
                  <el-input></el-input>
                </el-form-item>
              </el-form>
            </el-col> 
            <el-col :span="6">
              <el-form :label-width="formLabelWidth">
                <el-form-item label="受渡場所">
                    <el-select v-model="value" placeholder="Select">
                      <el-option
                        v-for="item in options"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                      </el-option>
                    </el-select>
                </el-form-item>
              </el-form>
            </el-col> 
            <el-col :span="2">
              <el-form>
                <el-form-item>
                  <el-checkbox v-model="checked">未受渡</el-checkbox>                  
                </el-form-item>
              </el-form>
            </el-col>
            <el-col :span="4">
              <el-button plain>検索</el-button>
            </el-col>
          </el-row>
        </div>
      </el-dialog>
    </div>
  </section>
</template>


<style>
.form-font-size{
  font-size: 12px;
}

.delivery-table{
  padding-top: 20px;
  width: 95%;
  /* min-width: 100px; */
  border-collapse: collapse;
  white-space: pre-wrap;
  text-align: center;
}

.delivery-table td, th {
  border: 1px solid #707070;
  padding: 8px;
}

.delivery-table th {
  background-color: #D9D9D9;
}

.item-card{
  background-color: transparent;
  border: 0;
  /* border: 1px solid #848484; */
}

.item-card-dt{
  background-color: transparent;
  border-radius: 30% 0% 0% 0%;
  border: 0;
  /* border: 1px solid #848484; */
}

.time-span {
  background-color: red;
  color: white;
  padding: 0 7px 0 7px;
  margin-left: 10px;
}

.card-total {
  background-color: #5a5a5a;
  color: white;
  text-align: center;
  font-weight: bold;
  width: 100%;
  border: 0;
}

.el-button:focus,
.el-button:hover {
  background-color: #ecf5ff;
}

.row-padding {
  padding-top: 15px;
}

table,
tr td {
  /* min-width: 400px; */
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
.m-caption {
  font-size: 22px;
}

.m-search{
  padding-top: 10px;
}

.m-btn-search {
  padding: 3px;
  background-color: white;
  border-color: 1px solid #EBEEF5;
  flex-grow: 1;
}

.m-btn-search:hover,
.m-btn-search.hover {
  background-color: #efefef;
  border-color: 1px solid #898d97;
  color: #707070;
}

.m-updatetime {
  line-height: 3;
}

@media screen and (max-width: 1200px) {
  .m-cal {
    width: 290px;
  }
  .m-caption {
    font-size: 18px;
  }
  .m-search {
    background-color: white;
  }
  .m-updatetime {
    padding-top: 5px;
    line-height: 1;
  }
}
</style>
<script>
import VueCal from "vue-cal";
import "vue-cal/dist/vuecal.css";
import "vue-cal/dist/i18n/ja.js";

const date = new Date();

export default {
  components: { VueCal },
  data() {
    return {
      checked: true,
      options: [{
        value: 'Option1',
        label: 'Option1'
      }, {
        value: 'Option2',
        label: 'Option2'
      }, {
        value: 'Option3',
        label: 'Option3'
      }, {
        value: 'Option4',
        label: 'Option4'
      }, {
        value: 'Option5',
        label: 'Option5'
      }],
      value: '',

      value1: '',
      value2: '',
      formLabelWidth: '70px',

      searchVisible: false,
      textarea: '',
      eventVisible: false,
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
    searchMode(){
      this.searchVisible = !this.searchVisible;
    },
    eventInput(){
      this.eventVisible = true;
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
