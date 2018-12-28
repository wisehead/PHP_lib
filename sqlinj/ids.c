/*******************************************************************************
 *      File Name: etest.c                                               
 *         Author: Hui Chen. (c) 2016                             
 *           Mail: chenhui13@baidu.com                                        
 *   Created Time: 2016/11/25-14:50                                    
 *	Modified Time: 2016/11/25-14:50                                    
 *******************************************************************************/
#include <stdio.h>
#define DAVINCI_BUFFER_SIZE 8192
int main(int argc, char **argv)
{
    stdout = freopen("ids.out","w",stdout);
    char buf[DAVINCI_BUFFER_SIZE];
    char sql[DAVINCI_BUFFER_SIZE];
    int rc = 0;
    while(1)
    {
        bzero(buf, DAVINCI_BUFFER_SIZE);
        bzero(sql, DAVINCI_BUFFER_SIZE);

        rc = 0;
        FILE * fp = NULL;
        //fp = fopen("ids.txt","r");
        //system("./myetest");
        //int rc = system("touch work.txt");
        while (fp == NULL)
        {
            fp = fopen("work.txt","r");
            usleep(10);
        }
        fgets(buf, DAVINCI_BUFFER_SIZE, fp);
        fclose(fp);
        //snprintf(sql, 1024, "./myetest \"%s\"", buf);
        rc = system("./myetest");
        rc = system("touch ok.txt");
        rc = system("rm work.txt");
        printf("sql is:%s\n", buf);
        /*
        if (strlen(buf) > 28)
        {
            printf("returning 1\n");
            return 1;
        }
        printf("returning 0\n");
        */
    }
    return rc;
}
