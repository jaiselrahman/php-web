<script language='javascript'>

function check_v_pass(flag) {
    pass_buf_value = document.getElementById('passwd').value;
    if(!pass_buf_value)
    {
        document.getElementById('div_passwd').innerHTML ='Invalid Password';
        return 0;
    }
    pass_level = 0;
    if (pass_buf_value.match(/[a-z]*/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[A-Z]*/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[0-9]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[@#$%^&*]/)) {
        pass_level++;
    }
    if (pass_buf_value.length < 5) 
    {
        if(pass_level >= 1) pass_level--;
    } else if (pass_buf_value.length >= 20) 
    {
        pass_level++;
    }
    output_val = '';
    switch (pass_level) {
        case 1: output_val='Very Weak';       break
        case 2: output_val='Weak';     break;
        case 3: output_val='Normal';     break;
        case 4: output_val='Strong';break;
        case 5: output_val='Very strong';break;
        default: output_val='Very Weak'+pass_level; break;
    } 
        if(flag)
        document.getElementById('div_passwd').innerHTML = output_val;
        return pass_level;       
}
function update_output(field, output)
{
    document.getElementById(field).innerHTML =output;
}
function comp_pass()
{
   var p1=document.getElementById('passwd').value; 
   var p2=document.getElementById('passwd2').value;
    if(p1!=p2)
        {
            document.getElementById('div_passwd2').innerHTML='Password does not Matches';
            return 0;
        }
    else
        {
            document.getElementById('div_passwd2').innerHTML='';
            return 1;
        }

}
function check_v_uname() 
{
    uname= document.getElementById('uname').value;
    if(uname.match(/^[a-zA-Z][^\s@]+$/) && uname.length > 5)
      {
            document.getElementById('div_uname').innerHTML='';
            return 1;
      }
   else
      {
            document.getElementById('div_uname').innerHTML='Invalid User Name';
            return 0;
      }


}
function check_v_mail() 
{
    mailid= document.getElementById('email').value;
    if(!mailid.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/) )
        {
            document.getElementById('div_email').innerHTML='Invalid E-mail Id';
            return 0;
        }
    else
        {
            document.getElementById('div_email').innerHTML='';
            return 1;      
        }

}
function validate()
{
    
    return ((check_v_uname()==1) && (check_v_mail()==1) && (check_v_pass(false)>=3) && (comp_pass()==1));
        
}

</script>