import java.util.*;

class Main {
  public static int count=0;
  public static boolean S(char c[]){
    int temp=count;
    boolean j=false;
    if(c[count++]=='r')
    {
      System.out.println(count);
      boolean t=X(c);
      if(!t)
      {
        j=Z(c);
        if(!j)
        {
          if(c[count]=='d')
          {
            j=true;
          }
        } 

      }
      
      else
      {
        return true;
      }
    }
    else{
      return false;
    }
    return j;
  }

    public static boolean X(char c[]){
      int temp=count;
             if(c[count++]=='o'&&c[count++]=='a')
             {
               return true;
             }
             else
             {
               count=temp;
             }
             
             if(c[count++]=='e'&&c[count++]=='a')
             {
               return true;
             }
             else{
               count=temp;
             }
             
               return false;
             
    }


        public static boolean Z(char c[]){
      int temp=count;
             if(c[count++]=='a'&&c[count]=='i')
             {
               return true;
             }
             
             
             else
             {
               count=temp;
               return false;
             }
    }
  
  public static void main(String[] args) {
    Scanner sc=new Scanner(System.in);
    String s=sc.next();
    char c[]=s.toCharArray();
    boolean t=S(c);
    if(t)
    {
      System.out.println("accepted");
    }
    else{
            System.out.println("not accepted");

    }

  }
}