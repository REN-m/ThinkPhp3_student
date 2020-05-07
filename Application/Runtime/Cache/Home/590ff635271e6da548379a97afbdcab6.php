<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/check.css" />
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/min.ui.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="bg"></div>
        <h3>学生满意度调查问卷</h3>
        <p class="title2">班级:19电竞-老师:潘涛</p>
        <h6>您好:</h6>
        <p class="descrip">
          欢迎参加学生满意度调查工作!
          此次调查是本校为了学生拥有更好的在校生活而专门设计的
          希望你抽出一点时间积极配合我们的调查工作,谢谢你的参与
        </p>
        <h6>说明:</h6>
        <p class="descrip">
          本次调查采用匿名形式,我们将严格保密你的信息
        </p>
      </header>
      <div class="content">
        <form action="">
          <div class="classify">
            <h4 class="title">后勤管理</h4>
            <div class="question-box">
              <p class="question">对学校的食堂环境你打多少分</p>
            <div
              class="mui-numbox"
              data-numbox-step="10"
              data-numbox-min="0"
              data-numbox-max="100"
            >
              <button class="mui-btn mui-numbox-btn-minus" type="button">
                -
              </button>
              <input class="mui-numbox-input" type="number" />
              <button class="mui-btn mui-numbox-btn-plus" type="button">
                +
              </button>
            </div>
            </div>
            <div class="question-box">
              <p class="question">其他意见</p>
            <textarea
              style="resize:none"
              name=""
              id=""
              cols="1"
              rows="4"
            ></textarea>
            </div>
          </div>
          <div class="classify">
            <h4 class="title">后勤管理</h4>
            <div class="question-box">
              <p class="question">对学校的食堂环境你打多少分</p>
              <div class="checkbox">
                <label>
                  <input name="radio1" type="radio">
                  <span>非常满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>不满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>非常不满意</span>
                </label>
              </div>
            </div>
            <div class="question-box">
              <p class="question">其他意见</p>
              <textarea
                style="resize:none"
                name=""
                id=""
                cols="1"
                rows="4"
              ></textarea>
            </div>
          </div>
          <div class="classify">
            <h4 class="title">后勤管理</h4>
            <div class="question-box">
              <p class="question">对学校的食堂环境你打多少分</p>
            <div
              class="mui-numbox"
              data-numbox-step="10"
              data-numbox-min="0"
              data-numbox-max="100"
            >
              <button class="mui-btn mui-numbox-btn-minus" type="button">
                -
              </button>
              <input class="mui-numbox-input" type="number" />
              <button class="mui-btn mui-numbox-btn-plus" type="button">
                +
              </button>
            </div>
            </div>
            <div class="question-box">
              <p class="question">其他意见</p>
            <textarea
              style="resize:none"
              name=""
              id=""
              cols="1"
              rows="4"
            ></textarea>
            </div>
          </div>
          <div class="classify">
            <h4 class="title">后勤管理</h4>
            <div class="question-box">
              <p class="question">对学校的食堂环境你打多少分</p>
              <div class="checkbox">
                <label>
                  <input name="radio1" type="radio">
                  <span>非常满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>不满意</span>
                </label>
                <label>
                  <input name="radio1" type="radio">
                  <span>非常不满意</span>
                </label>
              </div>
            </div>
            <div class="question-box">
              <p class="question">其他意见</p>
              <textarea
                style="resize:none"
                name=""
                id=""
                cols="1"
                rows="4"
              ></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="http://localhost/thinkphp3/Public/Home/js/min.ui.js"></script>
  </body>
</html>