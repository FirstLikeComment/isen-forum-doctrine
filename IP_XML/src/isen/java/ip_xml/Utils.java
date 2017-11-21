package isen.java.ip_xml;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;

/*public class Utils {

    private String key = "%20d57b1e68028f1e5629d553346e48f7f2457981a385726f9c6daf4ddff36f5eb6%20";
    private String ip = "193.52.13.228";

    public static String pushDataToIpInfoServices(String key, String ip) throws IOException {
        String donnees = "";
        try {
            URL monURL = new URL("http://api.ipinfodb.com/v3/ip-city/?key=" + key + "&ip=" + ip + "&format=xml");
            URLConnection connexion = monURL.openConnection();
            InputStream flux = connexion.getInputStream();

            BufferedReader in = new BufferedReader(new InputStreamReader(flux));

            String inputLine;
            while ((inputLine = in.readLine()) != null)
                donnees = donnees + inputLine + "\n";

            in.close();
        }catch(Exception e) {
        e.printStackTrace();
        }
        return donnees;
    }
}*/
