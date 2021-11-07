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
          <el-button class="hours-time" @click="TenToThirteen">10:00〜13:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time" @click="FourteenToSeventeen">14:00〜17:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time" @click="SixteenToTwenOne">18:00〜21:00</el-button>
        </el-col>
        <el-col :span="6">
          <el-button class="hours-time" @click="TimeOver">22:00</el-button>
        </el-col>
      </el-row>
      <!-- <el-table :data="commandTable">
        <el-table-column prop="pcommand" label="products"></el-table-column>
      </el-table> -->
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
          v-if="datastatus=='first'"
          height="450"
          :data="commandTable"
          style="width: 100%">
          <el-table-column label="" width="200">
            <el-table-column label="商品" prop="item_code">
              <template slot-scope="scope">
                <el-button disabled type="primary" class="btn-command">{{ scope.row.pcommand}}</el-button>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="10:00〜" prop="ten">
              <template slot-scope="scope">
                <span v-if="scope.row.ten">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.ten.user }}/{{ scope.row.ten.serve }}
                  </el-button>     
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button> 
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="11:00〜" prop="eleven">
              <template slot-scope="scope">
                <span v-if="scope.row.eleven">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.eleven.user }}/{{ scope.row.eleven.serve }}
                  </el-button>  
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="12:00〜" prop="twelve">
              <template slot-scope="scope">
                <span v-if="scope.row.twelve">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.twelve.user }}/{{ scope.row.twelve.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    style="color: #1f2d3d"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="13:00〜" prop="thirteen">
              <template slot-scope="scope">
                <span v-if="scope.row.thirteen">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.thirteen.user }}/{{ scope.row.thirteen.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>     
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="511/535">
            <el-table-column label="合計" class-name="totoalColumn" fixed="right" prop="pcommand" :formatter="formatterTotal">
            </el-table-column>
          </el-table-column>
        </el-table>
        <el-table
          v-else-if="datastatus=='second'"
          height="450"
          :data="commandTable"
          style="width: 100%">
          <el-table-column label="" width="200">
            <el-table-column label="商品" prop="pcommand">
              <template slot-scope="scope">
                <el-button disabled type="primary" class="btn-command">{{ scope.row.pcommand }}</el-button>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="14:00〜" prop="time14">
              <template slot-scope="scope">
                <span v-if="scope.row.time14">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time14.user }}/{{ scope.row.time14.serve }}
                  </el-button>     
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button> 
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="15:00〜" prop="time15">
              <template slot-scope="scope">
                <span v-if="scope.row.time15">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time15.user }}/{{ scope.row.time15.serve }}
                  </el-button>  
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="16:00〜" prop="time16">
              <template slot-scope="scope">
                <span v-if="scope.row.time16">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time16.user }}/{{ scope.row.time16.user }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    style="color: #1f2d3d"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="17:00〜" prop="time17">
              <template slot-scope="scope">
                <span v-if="scope.row.time17">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time17.user }}/{{ scope.row.time17.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>     
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="511/535">
            <el-table-column label="合計" class-name="totoalColumn" fixed="right" prop="pcommand" :formatter="formatterTotal">
            </el-table-column>
          </el-table-column>
        </el-table>
        <el-table
          v-else-if="datastatus=='third'"
          height="450"
          :data="commandTable"
          style="width: 100%">
          <el-table-column label="" width="200">
            <el-table-column label="商品" prop="pcommand">
              <template slot-scope="scope">
                <el-button disabled type="primary" class="btn-command">{{ scope.row.pcommand }}</el-button>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="18:00〜" prop="time18">
              <template slot-scope="scope">
                <span v-if="scope.row.time18">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time18.serve }}/{{ scope.row.time18.serve }}
                  </el-button>     
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button> 
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="19:00〜" prop="time19">
              <template slot-scope="scope">
                <span v-if="scope.row.time19">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time19.user}}/{{ scope.row.time19.serve }}
                  </el-button>  
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="20:00〜" prop="time20">
              <template slot-scope="scope">
                <span v-if="scope.row.time20">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time20.user }}/{{ scope.row.time20.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    style="color: #1f2d3d"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="21:00〜" prop="time21">
              <template slot-scope="scope">
                <span v-if="scope.row.time21">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time21.user }}/{{ scope.row.time21.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>     
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="511/535">
            <el-table-column label="合計" class-name="totoalColumn" fixed="right" prop="pcommand" :formatter="formatterTotal">
            </el-table-column>
          </el-table-column>
        </el-table>
        <el-table
          v-else-if="datastatus=='fourth'"
          height="450"
          :data="commandTable"
          style="width: 100%">
          <el-table-column label="" width="200">
            <el-table-column label="商品" prop="pcommand">
              <template slot-scope="scope">
                <el-button disabled type="primary" class="btn-command">{{ scope.row.pcommand }}</el-button>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="22:00〜" prop="time22">
              <template slot-scope="scope">
                <span v-if="scope.row.time22">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time22.user }}/{{ scope.row.time22.serve }}
                  </el-button>     
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button> 
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="23:00〜" prop="timw23">
              <template slot-scope="scope">
                <span v-if="scope.row.time23">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time23.user }}/{{ scope.row.time23.serve }}
                  </el-button>  
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="24:00〜" prop="time24">
              <template slot-scope="scope">
                <span v-if="scope.row.time24">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time24.user }}/{{ scope.row.time24.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    style="color: #1f2d3d"
                    class="btn-command"
                  >
                    0/0
                  </el-button>    
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="33/35">
            <el-table-column label="5:00〜" prop="time5">
              <template slot-scope="scope">
                <span v-if="scope.row.time5">
                  <el-button 
                    type="info"
                    class="btn-command"
                    @click="calculatorVisibleFunc(scope.row, scope.column)"
                  >
                    {{ scope.row.time5.user }}/{{ scope.row.time5.serve }}
                  </el-button> 
                </span>
                <span v-else>
                  <el-button 
                    disabled
                    type="info"
                    class="btn-command"
                  >
                    0/0
                  </el-button>     
                </span>
              </template>
            </el-table-column>
          </el-table-column>
          <el-table-column label="511/535">
            <el-table-column label="合計" class-name="totoalColumn" fixed="right" prop="pcommand" :formatter="formatterTotal">
            </el-table-column>
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

        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <el-card>
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
                          <button @click="elclickSave()" style="height: 105px; font-size: 30px" class="btn-cal-num">登録</button>
                        </el-row>
                      </el-col>
                    </el-row>
                  </el-card>
                </div>
            </div>
        </div>
    </div>
  </section>
</template>


<style>
.el-table--enable-row-transition .el-table__body td.el-table__cell{
  /* text-align: center; */
}
.totoalColumn{
  /* width: -webkit-fill-available; */
  text-align: center;
  color: black;
  background-color: #F5F7FA;
}
.btn-command{
  color: #1f2d3d!important;
  width: -webkit-fill-available;
}

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
  data() {
    return {
      timeSign: '',
      datastatus: 'first',
      rltNum: '',
      operator: '',
      commandTable: [],
	    addtominus: false,
      calculatorVisible: false,
      num_user: {},
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
    elclickSave(){
      this.num_user[this.timeSign].user = this.rltNum;
      
      var updateData = {
        rltNum: this.rltNum,
        timeSign: this.timeSign,
      }
      // alert(this.detail.take_productions_id);
      axios.put('api/productcommand/' + this.num_user.pcommand, updateData).then(data => {
        console.log('calculator success!');
        $('#addNew').modal('hide');
      })
      .catch(() => {
        console.log('calculator failed!');
      });
    },

    elclickAdd(){
      this.addtominus = !this.addtominus;
        if(this.addtominus){
          this.operator = "-";
        } else{
          this.operator = "+";
        }
    },

    upOne(){
      this.rltNum = Number(this.rltNum) + 1;
      this.operator = '';
    },
    downOne(){
      this.operator = '';
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
    calculatorVisibleFunc(row, column){
      this.timeSign = column.property;
      // console.log(row[timeSign].user);
      // alert(data.production_num_user);
      $('#addNew').modal('show');
      this.rltNum = row[this.timeSign].user;
      // data = 90;
      this.num_user = row;
      // if(data.ten){
      //   this.rltNum = data.ten.user;
      // }
      // if(data.eleven){
      //   this.rltNum = data.eleven.user;
      // }
      // if(data.twelve){
      //   this.rltNum = data.twelve.user;
      // }
      // if(data.thirteen){
      //   this.rltNum = data.thirteen.user;
      // }
      // this.calculatorVisible = true;

    },
    formatterTotal(row){
      var totalUser = 0, totalServe = 0;
      if(this.datastatus == 'first'){
        if(row.ten){
          totalUser += row.ten.user;
          totalServe += row.ten.serve;
        }
        if(row.eleven){
          totalUser += row.eleven.user;
          totalServe += row.eleven.serve;
        }
        if(row.twelve){
          totalUser += row.twelve.user;
          totalServe += row.twelve.serve;
        }
        if(row.thirteen){
          totalUser += row.thirteen.user;
          totalServe += row.thirteen.serve;
        }
      } else if(this.datastatus == 'second'){
        if(row.time14){
          totalUser += row.time14.user;
          totalServe += row.time14.serve;
        }
        if(row.time15){
          totalUser += row.time15.user;
          totalServe += row.time15.serve;
        }
        if(row.time16){
          totalUser += row.time16.user;
          totalServe += row.time16.serve;
        }
        if(row.time17){
          totalUser += row.time17.user;
          totalServe += row.time17.serve;
        }
      } else if(this.datastatus == 'third'){
        if(row.time18){
          totalUser += row.time18.user;
          totalServe += row.time18.serve;
        }
        if(row.time19){
          totalUser += row.time19.user;
          totalServe += row.time19.serve;
        }
        if(row.time20){
          totalUser += row.time20.user;
          totalServe += row.time20.serve;
        }
        if(row.time21){
          totalUser += row.time21.user;
          totalServe += row.time21.serve;
        }
      } else if(this.datastatus == 'fourth'){
        if(row.time22){
          totalUser += row.time22.user;
          totalServe += row.time22.serve;
        }
        if(row.time23){
          totalUser += row.time23.user;
          totalServe += row.time23.serve;
        }
        if(row.time24){
          totalUser += row.time24.user;
          totalServe += row.time24.serve;
        }
        if(row.time5){
          totalUser += row.time5.user;
          totalServe += row.time5.serve;
        }
      }

      return totalUser + "/" + totalServe;
    },

    loadProductsCommand(){
      axios.get('api/productcommand/' + this.datastatus).then(res => {
      // axios.get('api/productcommand').then(res => {
        // console.log("===============================================")
        console.log(res.data);
        // var data = Array();
        // res.data.forEach((item, index) => {
        //   data[item.item_code][item.production_time_code]['num_user'] = item.production_num_user;
        //   data[item.item_code][item.production_time_code]['num_serve'] = item.production_num_serve;
        // });
        // console.log(data);
        this.commandTable = res.data;
      });
    },
    TenToThirteen(){
      this.datastatus = 'first';
      this.loadProductsCommand();
    },
    FourteenToSeventeen(){
      this.datastatus = 'second';
      this.loadProductsCommand();
    },
    SixteenToTwenOne(){
      this.datastatus = 'third';
      this.loadProductsCommand();
    },
    TimeOver(){
      this.datastatus = 'fourth';
      this.loadProductsCommand();
    },
    viewDate(date, text){
      var stDate = date.startDate;
      stDate = stDate.toISOString();
      stDate = DateTime.fromISO(stDate).toFormat('yyyy-MM-dd');
      console.log(date.startDate);
      console.log(stDate);
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
