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
              <button class="m-btn-search">検索モード</button>
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
    </div>
  </section>
</template>


<style>
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
  min-width: 400px;
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

.m-btn-search {
  padding: 3px;
  background-color: white;
  border-color: #646464 #646464 #646464;
  flex-grow: 1;
}

.m-btn-search:hover,
.m-btn-search.hover {
  background-color: #efefef;
  border-color: #efefef;
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
