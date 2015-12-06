<script>
function Numeros()
	{
		if((event.keyCode < 96 || event.keyCode >110 )  && event.keyCode != 42 && event.keyCode != 43 && event.keyCode != 8 && event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 32 && event.keyCode != 9 && event.keyCode != 35 && event.keyCode != 36 && event.keyCode != 46)
		{
			return false;
		}
	}
</script>

<script type="text/javascript">
var patron = new Array(2,2,4)
var patron2 = new Array(4,4)
var patron3 = new Array(8,1)
var patron4 = new Array(4,6,3,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
	val = d.value
	largo = val.length
	val = val.split(sep)
	val2 = ''
	for(r=0;r<val.length;r++){
		val2 += val[r]
	}
	if(nums){
		for(z=0;z<val2.length;z++){
			if(isNaN(val2.charAt(z))){
				letra = new RegExp(val2.charAt(z),"g")
				val2 = val2.replace(letra,"")
			}
		}
	}
	val = ''
	val3 = new Array()
	for(s=0; s<pat.length; s++){
		val3[s] = val2.substring(0,pat[s])
		val2 = val2.substr(pat[s])
	}
	for(q=0;q<val3.length; q++){
		if(q ==0){
			val = val3[q]
		}
		else{
			if(val3[q] != ""){
				val += sep + val3[q]
				}
		}
	}
	d.value = val
	d.valant = val
	}
}




</script>




