<!DOCTYPE HTML>
<html>
<head>

<div class="load-more-container">
  <input type="checkbox" id="load-more"/>
  <ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>    
    <li>10</li>
    <li>11</li>
    <li>12</li>    
  </ul>
  <label class="load-more-btn" for="load-more">
    <span class="unloaded">LOAD MORE</span>
    <span class="loaded">VIEW LESS</span>
  </label>  
</div>
<style>

body { background: #203040; }
*, *:before, *:after { box-sizing: border-box; }

.load-more-container {
  background: #fff;
  width: 500px;
  min-height: 500px;
  margin: 20px auto;
  position: relative;
  ul {
    list-style-type: none;
    padding: 0;   
    &:after { content: ""; display: table; clear: both; }
    li {
      width: calc(25% - 10px);
      margin: 10px 5px 0;
      height: 100px;
      background: #446CB3;
      color: #fff;
      float: left;
      border-radius: 2px;
      &:nth-child(1n + 5) {
        max-height: 0;
        opacity: 0;
        transition: 0.1s ease-in;
      }
    }
  }
  .load-more-btn {
    width: 150px;
    line-height: 40px;
    border-radius: 2px;
    margin: 0 auto;
    display: block;
    background: #219150;
    color: #fff;
    cursor: pointer;
    text-align: center;
    &:hover { background: green; }
    .loaded { display: none; }
  }
  #load-more {
    display: none;
    &:checked ~ ul li:nth-child(1n + 5) {
      max-height: 999px;
      opacity: 1;
      transition: 0.2s ease-in;      
    }
    &:checked ~ .load-more-btn {
      .loaded { display: block; }
      .unloaded { display: none; }
    }
  }
}





</style>

</html>

