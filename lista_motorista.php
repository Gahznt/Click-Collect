<?php
 include 'verifica_login.php';
 include 'cabecalho_motorista.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';
?>

 <h1>Gaiolas despachadas</h1>
<div class="container">
	<form action="filtro_motorista_2.php">
	<br><p>Filtrar loja: <select name="loja">
		<option value=" 12">CE12</option>
		<option value=" 20">CE20</option>
		<option value=" 23">CE23</option>
		<option value=" 24">CE24</option>
		<option value=" 25">CE25</option>
		<option value=" 29">CE29</option>
		<option value=" 32">CE32</option>
		<option value=" 34">CE34</option>
		<option value=" 35">CE35</option>
		<option value=" 37">CE37</option>
		<option value=" 38">CE38</option>
		<option value=" 39">CE39</option>
		<option value=" 40">CE40</option>
		<option value=" 41">CE41</option>
		<option value=" 42">CE42</option>
		<option value=" 43">CE43</option>
		<option value=" 44">CE44</option>
		<option value=" 45">CE45</option>
		<option value=" 46">CE46</option>
		<option value=" 47">CE47</option>
		<option value=" 48">CE48</option>
		<option value=" 50">CE50</option>
		<option value=" 52">CE52</option>
		<option value=" 53">CE53</option>
		<option value=" 54">CE54</option>
		<option value=" 55">CE55</option>
		<option value=" 56">CE56</option>
		<option value=" 57">CE57</option>
		<option value=" 59">CE59</option>
		<option value=" 60">CE60</option>
		<option value=" 62">CE62</option>
		<option value=" 63">CE63</option>
		<option value=" 64">CE64</option>
		<option value=" 66">CE66</option>
		<option value=" 67">CE67</option>
		<option value=" 68">CE68</option>
		<option value=" 69">CE69</option>
		<option value=" 70">CE70</option>
		<option value=" 71">CE71</option>
		<option value=" 72">CE72</option>
		<option value=" 73">CE73</option>
		<option value=" 75">CE75</option>
		<option value=" 76">CE76</option>
		<option value=" 77">CE77</option>
		<option value=" 79">CE79</option>
		<option value=" 80">CE80</option>
		<option value=" 81">CE81</option>
		<option value=" 82">CE82</option>
		<option value=" 84">CE84</option>
		<option value=" 85">CE85</option>
		<option value=" 86">CE86</option>
		<option value=" 87">CE87</option>
		<option value=" 88">CE88</option>
		<option value=" 89">CE89</option>
		<option value=" 90">CE90</option>
		<option value=" 91">CE91</option>
		<option value=" 92">CE92</option>
		<option value=" 94">CE94</option>
		<option value=" 95">CE95</option>
		<option value=" 96">CE96</option>
		<option value=" 97">CE97</option>
		<option value=" 98">CE98</option>
		<option value=" 99">CE99</option>
		<option value=" 100">CE100</option>
		<option value=" 101">CE101</option>
		<option value=" 102">CE102</option>
		<option value=" 103">CE103</option>
		<option value=" 105">CE105</option>
		<option value=" 106">CE106</option>
		<option value=" 107">CE107</option>
		<option value=" 108">CE108</option>
		<option value=" 109">CE109</option>
		<option value=" 110">CE110</option>
		<option value=" 111">CE111</option>
		<option value=" 112">CE112</option>
		<option value=" 114">CE114</option>
		<option value=" 115">CE115</option>
		<option value=" 116">CE116</option>
		<option value=" 117">CE117</option>
		<option value=" 118">CE118</option>
		<option value=" 119">CE119</option>
		<option value=" 120">CE120</option>
		<option value=" 121">CE121</option>
		<option value=" 122">CE122</option>
		<option value=" 123">CE123</option>
		<option value=" 124">CE124</option>
		<option value=" 125">CE125</option>
		<option value=" 126">CE126</option>
		<option value=" 128">CE128</option>
		<option value=" 129">CE129</option>
		<option value=" 130">CE130</option>
		<option value=" 131">CE131</option>
		<option value=" 133">CE133</option>
		<option value=" 135">CE135</option>
		<option value=" 136">CE136</option>
		<option value=" 137">CE137</option>
		<option value=" 138">CE138</option>
		<option value=" 139">CE139</option>
		<option value=" 141">CE141</option>
		<option value=" 142">CE142</option>
		<option value=" 143">CE143</option>
		<option value=" 144">CE144</option>
		<option value=" 145">CE145</option>
		<option value=" 146">CE146</option>
		<option value=" 147">CE147</option>
		<option value=" 149">CE149</option>
		<option value=" 150">CE150</option>
		<option value=" 151">CE151</option>
		<option value=" 152">CE152</option>
		<option value=" 153">CE153</option>
		<option value=" 154">CE154</option>
		<option value=" 155">CE155</option>
		<option value=" 156">CE156</option>
		<option value=" 157">CE157</option>
		<option value=" 158">CE158</option>
		<option value=" 159">CE159</option>
		<option value=" 160">CE160</option>
		<option value=" 161">CE161</option>
		<option value=" 162">CE162</option>
		<option value=" 164">CE164</option>
		<option value=" 165">CE165</option>
		<option value=" 166">CE166</option>
		<option value=" 167">CE167</option>
		<option value=" 168">CE168</option>
		<option value=" 169">CE169</option>
		<option value=" 170">CE170</option>
		<option value=" 171">CE171</option>
		<option value=" 172">CE172</option>
		<option value=" 173">CE173</option>
		<option value=" 174">CE174</option>
		<option value=" 175">CE175</option>
		<option value=" 176">CE176</option>
		<option value=" 177">CE177</option>
		<option value=" 178">CE178</option>
		<option value=" 179">CE179</option>
		<option value=" 180">CE180</option>
		<option value=" 181">CE181</option>
		<option value=" 182">CE182</option>
		<option value=" 183">CE183</option>
		<option value=" 184">CE184</option>
		<option value=" 185">CE185</option>
		<option value=" 186">CE186</option>
		<option value=" 187">CE187</option>
		<option value=" 188">CE188</option>
		<option value=" 190">CE190</option>
		<option value=" 191">CE191</option>
		<option value=" 192">CE192</option>
		<option value=" 193">CE193</option>
		<option value=" 194">CE194</option>
		<option value=" 195">CE195</option>
		<option value=" 196">CE196</option>
		<option value=" 197">CE197</option>
		<option value=" 198">CE198</option>
		<option value=" 199">CE199</option>
		<option value=" 200">CE200</option>
		<option value=" 202">CE202</option>
		<option value=" 203">CE203</option>
		<option value=" 204">CE204</option>
		<option value=" 205">CE205</option>
		<option value=" 206">CE206</option>
		<option value=" 207">CE207</option>
		<option value=" 208">CE208</option>
		<option value=" 209">CE209</option>
		<option value=" 211">CE211</option>
		<option value=" 217">CE217</option>
		<option value=" 218">CE218</option>
		<option value=" 219">CE219</option>
		<option value=" 220">CE220</option>
		<option value=" 221">CE221</option>
		<option value=" 222">CE222</option>
		<option value=" 223">CE223</option>
		<option value=" 224">CE224</option>
		<option value=" 225">CE225</option>
		<option value=" 226">CE226</option>
		<option value=" 227">CE227</option>
		<option value=" 229">CE229</option>
		<option value=" 230">CE230</option>
		<option value=" 234">CE234</option>
		<option value=" 235">CE235</option>
		<option value=" 236">CE236</option>
		<option value=" 237">CE237</option>
		<option value=" 238">CE238</option>
		<option value=" 239">CE239</option>
		<option value=" 240">CE240</option>
		<option value=" 241">CE241</option>
		<option value=" 242">CE242</option>
		<option value=" 243">CE243</option>
		<option value=" 244">CE244</option>
		<option value=" 245">CE245</option>
		<option value=" 247">CE247</option>
		<option value=" 248">CE248</option>
		<option value=" 249">CE249</option>
		<option value=" 250">CE250</option>
		<option value=" 251">CE251</option>
		<option value=" 253">CE253</option>
		<option value=" 254">CE254</option>
		<option value=" 255">CE255</option>
		<option value=" 256">CE256</option>
		<option value=" 258">CE258</option>
		<option value=" 259">CE259</option>
		<option value=" 260">CE260</option>
		<option value=" 262">CE262</option>
		<option value=" 263">CE263</option>
		<option value=" 264">CE264</option>
		<option value=" 266">CE266</option>
		<option value=" 267">CE267</option>
		<option value=" 269">CE269</option>
		<option value=" 270">CE270</option>
		<option value=" 273">CE273</option>
		<option value=" 274">CE274</option>
		<option value=" 1014">BY-14</option>
		</select>
		<input class="btn btn-secondary" type="submit" name="filtrar"><br><br>
		</p>
	</form>
<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Gaiola</td>
		<td align="center"class="text-primary">Loja</td>
		<td align="center"class="text-primary">Data do Envio</td>
		<td align="center"class="text-primary">Recebimento Loja</td>
	</tr>
	
	<?php 
	$resultado = mysqli_query ($conexao, 'SELECT * FROM despacho');
	while ($dados = $resultado->fetch_array()) { ?>

		<tr>
			<td align="center" ><?php echo $dados['gaiolas'] ?></td>
			<td align="center" ><?php echo $dados['loja'] ?></td>
			<td align="center" ><?php echo date('d/m/Y h:m:s', strtotime( $dados['datadespacho'])) ?></td>
			<td align="center">
			<?php if ( $dados['recebimentoloja'] == 0 ) { ?> 
				<form method="POST" action="retorno.php">
				<input type="text" hidden name="id" <?php echo "value='".$dados['id']."'"?> >
				<p class="alert alert-danger" role="alert">Pendente de entrega</p>
				</form>
			<?php } else {
					echo $dados['datarecebimento'];
			} ?>
			</td>
		</tr>
	<?php }	?>
</table>
</div>
<?php include 'rodape.php' ?>