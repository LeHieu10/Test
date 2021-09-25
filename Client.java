/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ClientSide;

import java.io.IOException;
import java.net.InetAddress;
import java.net.Socket;
import java.net.UnknownHostException;
import java.util.Scanner;

/**
 *
 * @author ASUS
 */
public class Client {
    private int port;
    private String name;

    public Client(int port, String name){
        this.port = port;
        this.name = name;
    }

    public void execute(){
        try {
            Socket client = new Socket("localhost", port);
            ReadClient read = new ReadClient(client);
            read.start();
            WriteClient write = new WriteClient(client, name);
            write.start();
        } catch (IOException e) {
            System.out.println(e);;
        }
    }
    public static void main(String[] args) throws UnknownHostException {
        Scanner scan = new Scanner(System.in);
        System.out.print("nhap ten: ");
        String name = scan.nextLine();
        Client client = new Client(2207, name);
        client.execute();
    }
    //change change 2
}
