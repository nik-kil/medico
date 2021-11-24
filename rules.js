function isAlpha()
		{
		
			var k;
			k=event.keyCode;
			
			if( (k>=97 && k<=122) || ( k>=65 && k<=90 ) )
			{}
			else
			{
				return false;
			}
		
		}
		
		
		function isDigit()
		{
		
			var k;
			k=event.keyCode;
			
			if( k>=48 && k<=57 )
			{}
			else
			{
				return false;
			}
		
		}
		
		function chklength( f )
		{
			
			var len=f.mobno.value.length;
			
			if( len<10 )
			{
			alert("Mobile no must have 10 digits");
			f.mobno.focus();
			return (false);
			}
			
		
		}
		