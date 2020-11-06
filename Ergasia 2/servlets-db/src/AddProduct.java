import java.io.PrintWriter;
import java.io.IOException;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;


public class AddProduct extends HttpServlet {

    @Override
    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        
        String db_connect = "jdbc:mysql://localhost:3306/demo?allowPublicKeyRetrieval=true&useSSL=false&serverTimezone=EET";
        String username = "temp";
        String password = "";
        try {
            Connection conn = DriverManager.getConnection(db_connect, username, password);
            Statement stmt = conn.createStatement();
            String sqlStr = "insert into products (barcode, name, genre, description) values (?,?,?,?)";
            PreparedStatement pst = conn.prepareStatement(sqlStr);
            String barcode = request.getParameter("barcode");
            String name = request.getParameter("name");
            String genre = request.getParameter("genre");
            String description = request.getParameter("description");
            
            pst.setString(1, barcode);
            pst.setString(2, name);
            pst.setString(3, genre);
            pst.setString(4, description);
            int numRowsChanged = pst.executeUpdate();
            
            PrintWriter out = response.getWriter();
            response.setContentType("text/html");

            out.println("<h2 style='color:red'>You succeffully added the artist</h2>");
            RequestDispatcher rd=request.getRequestDispatcher("add-product.html");  
            rd.include(request, response);
            out.close();
              
        }
        catch (Exception ex){
            response.setContentType("text/html");
            PrintWriter out = response.getWriter();
            out.println("<h2 style='color:red;'>Please confirm that the barcode you entered is unique.<br></h2>");
            RequestDispatcher rd=request.getRequestDispatcher("add-product.html");
            rd.include(request, response);
            out.println("<p>Error: " + ex.getMessage() + "</p>");  // for debug
            ex.printStackTrace();
            out.close();
        } 
    }
}
