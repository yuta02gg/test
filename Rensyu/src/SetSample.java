import java.util.Set;
import java.util.TreeSet;

public class SetSample {
	
	public static void main(String[] args) {
		Set<String>set=new TreeSet<String>();
		
			set.add("value1");
			set.add("value2");
			set.add("value3");
			set.add("value4");
			set.add("value5");
			
			set.add("value2");
		
		for(String s:set) {
			System.out.println(s);
		}
		
	}

}
