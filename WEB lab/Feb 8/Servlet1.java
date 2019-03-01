import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;

public class Servlet1 extends HttpServlet{

    public void doGet(HttpServletRequest req, HttpServletResponse res) throws IOException{

        res.setContentType("text/html");
        PrintWriter out = res.getWriter();
        // out.println("<html>");
        // out.println("<head>");
        // out.println("<title> Servlet 1 </title>");
        // out.println("</head>");
        // out.println("<body>");
        // out.println("<h1> Hello World " + new Date().toString() + "</h1>");
        // out.println("</body>");
        // out.println("</html>");
        out.println("Hello World " + new Date().toString());
    }

}