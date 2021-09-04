
<iframe name="random-no-refresh" style="display:none;"></iframe>
<form id="ranNum" method="post" target="random-no-refresh">
    <h3>Min</h3>
    <input type="number" id="min" name="min" placeholder="0"></input>
    <h3>Max</h3>
    <input type="number" id="max" name="max" placeholder="10"></input>
    <button type="submit" name="randomButtonGenerateNew" id="randomButtonGenerateNew" form="ranNum" class="button yellow-btn wide-box" onclick="randomGenerate(); SubmitFormData();">Generate</button>
    <input type="number" id="output" name="output"></input>
</form>

<script src="../script/connect.js"></script>