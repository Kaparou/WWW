import java.io.IOException;
import java.io.PrintWriter;
 
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
import com.iquickinfo.Dao;
 
public class Servlet extends HttpServlet {
    private static final long serialVersionUID = 1L;
 
     
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
    {
         System.out.println("this is servlet");
            
          String barcode=request.getParameter("barcode").trim();
          String name=request.getParameter("name").trim();
          String genre=request.getParameter("genre").trim();
		  String genre=request.getParameter("description").trim();
           
          Dao dao=new Dao(); 
          boolean b=dao.saveDetails(barcode, name, genre, description);
          response.setContentType("text/html");
          PrintWriter out=response.getWriter();
         if(b==true)
         {
           out.println("<h1>You succeffully added the artist</h1>");
            
         }
          
         else
         {
             out.println("<h1>The artist with this barcode already exists.</h1>"); 
         }
         out.println("");
         out.close();
    }
 
}
