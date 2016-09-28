<!DOCTYPE html>
<!-- saved from url=(0099)http://npu85.npu.edu/~henry/npu/classes/javascript/intro/hw/hc/eval_calculator/eval_calculator.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head><body>

<p>
<!--
<TABLE ALIGN=ABSLEFT BORDER=5 CELLSPACING=2 CELLPADDING=1 WIDTH=600> 
-->
<table BORDER=0> 

<tbody><tr valign="TOP">
<td colspan="5">
<input type="text" id="screen" style=" Border-color:blue">
</td> 
</tr>


<tr valign="TOP">
<td colspan="2">
<button type="button" onclick="main(&#39;Clear&#39;)">Clear</button>
</td>
<td>
<button type="button" onclick="main(&#39;=&#39;)">=</button>
</td>
<td>
<button type="button" onclick="main(&#39;*-1&#39;)">+/-</button>
</td>
<td>
<button type="button" onclick="main(&#39;.&#39;)">.</button>
</td>
</tr>


<tr valign="TOP">
<td>
<button type="button" onclick="main(&#39;*&#39;)">*</button>
</td>
<td>
<button type="button" onclick="main(&#39;/&#39;)">/</button>
</td>
<td>
<button type="button" onclick="main(&#39;+&#39;)">+</button>
</td>
<td colspan="2">
<button type="button" onclick="main(&#39;-&#39;)">-</button>
</td>

</tr>


<tr valign="TOP">
<td>
<button type="button" onclick="main(&#39;1&#39;)">1</button>
</td>
<td>
<button type="button" onclick="main(&#39;2&#39;)">2</button>
</td>
<td>
<button type="button" onclick="main(&#39;3&#39;)">3</button>
</td>
<td>
<button type="button" onclick="main(&#39;4&#39;)">4</button>
</td>
<td>
<button type="button" onclick="main(&#39;5&#39;)">5</button>
</td>
</tr>


<tr valign="TOP">
<td>
<button type="button" onclick="main(&#39;6&#39;)">6</button>
</td>
<td>
<button type="button" onclick="main(&#39;7&#39;)">7</button>
</td>
<td>
<button type="button" onclick="main(&#39;8&#39;)">8</button>
</td>
<td>
<button type="button" onclick="main(&#39;9&#39;)">9</button>
</td>
<td>
<button type="button" onclick="main(&#39;10&#39;)">0</button>
</td>
</tr>


</tbody></table> 
</p>

<script>

function main(key) {
   var old= document.getElementById("screen").value;
   if (key == '=')
      document.getElementById("screen").value =eval(old);
   else if(key == '*-1')
      document.getElementById("screen").value =eval(old)*-1;
   else if (key == 'Clear')
      document.getElementById("screen").value = '';
   else
      document.getElementById("screen").value = old + key;
}

</script>
 

</body></html>