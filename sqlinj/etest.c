/*******************************************************************************
 *      File Name: etest.c                                               
 *         Author: Hui Chen. (c) 2016                             
 *           Mail: chenhui13@baidu.com                                        
 *   Created Time: 2016/11/25-14:50                                    
 *	Modified Time: 2016/11/25-14:50                                    
 *******************************************************************************/
#include <stdio.h>
int main(int argc, char **argv)
{
    /*
    if(argc != 2)
    {
        printf("usage:etest sql\n");
        return -1;
    }
    */
    //char buf[1024];
    //bzero(buf, 1024);
    //snprintf(buf, 1024, "./myetest \"%s\"", argv[1]);
    int rc = 0;

    FILE * fp = NULL;
    //fp = fopen("ids.txt","r");
    //system("./myetest");
    //int rc = system("touch work.txt");
    while (fp == NULL)
    {
        fp = fopen("ok.txt","r");
        usleep(10);
    }
    fclose(fp);
    rc = system("rm ok.txt");
    //printf("sql is:%s\n", buf);
    /*
    if (strlen(buf) > 28)
    {
        printf("returning 1\n");
        return 1;
    }
    printf("returning 0\n");
    */
    return rc;
}
