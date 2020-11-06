import java.io.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Welcome extends HttpServlet {

    @Override
    public void doGet(HttpServletRequest request, HttpServletResponse response)
               throws ServletException, IOException {
        
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        int count = 0;  // counts the number of the records in the database


        try (Connection conn = DriverManager.getConnection(
            "jdbc:mysql://localhost:3306/demo?allowPublicKeyRetrieval=true&useSSL=false&serverTimezone=EET",
            "temp", ""); // for mysql
            Statement stmt = conn.createStatement();) 
        {
            String sqlStr = "select * from products";
            ResultSet rset = stmt.executeQuery(sqlStr);
            while(rset.next()) { count++; }
        }
        catch(Exception ex) {
            out.println("<p>Error: " + ex.getMessage() + "</p>");
            ex.printStackTrace();
        }
        out.println("<!DOCTYPE html>" 
        +"<html>" 
        +"<head>"
        +"<meta charset='UTF-8'>"
        +"<title>DB & Servlets Demo For Artists</title>"
        +"<link rel='stylesheet' href='index.css'>"
    +"</head>"
    +"<body>"
        +"<main>"
            +"<section style='text-align:center;'>"
                +"<h1 style='font-size: 2.2rem;'margin-top: 20px;>"
                    +"Servlets and Databases"
                +"</h1>"
                +"<br>"
            +"</section>"
    
            +"<section style='text-align:center;'>"
                +"<h2>Currently our database contains <strong>" +count+ "</strong> products.</h2><br>"
            +"</section>"
    
            +"<section>"
                +"<h4>"
                    +"<ul style='text-align:center;'>"
                        +"<li>"
                            +"To see all artists: "
                            +"<a href='http://83.212.78.197:8080/servlets-db/all-products'><u>All products</u></a>"
                        +"</li>"
                        +"<br>"
                        +"<li>"
                            +"To add a new artist: "
                            +"<a href='http://83.212.78.197:8080/servlets-db/add-product.html'><u>Add product</u></a>"
                        +"</li>"
                    +"</ul>"
                +"</h4>"
            +"</section>"
        +"</main>"
    +"</body>"
    +"</html>'"
    );
    }
}
