package isen.java.tp1.thread;

public class ExempleThread2 extends Thread {

    private String toSay;
    private int toWait;
    public ExempleThread2(String toSay, int toWait) {
        this.toSay=toSay;
        this.toWait= toWait;
    }

    public void run() {
        System.out.print("START:"+toSay);
        try {
            sleep(toWait);
        } catch (Exception e) {
        }
        System.out.print(toSay);
    }
    public static void main(String args[]){
        ExempleThread2 thread1, thread2, thread3;
        thread1 = new ExempleThread2("Hello ", 50);
        thread2 = new ExempleThread2("World ",25);
        thread3 = new ExempleThread2("Everybody ",40);

        thread1.start();
        thread2.start();
        thread3.start();

        thread1.run();
        thread2.run();
        thread3.run();
        System.exit(0);
    }
}
