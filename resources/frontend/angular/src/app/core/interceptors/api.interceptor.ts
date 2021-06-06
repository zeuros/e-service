import {HttpEvent, HttpHandler, HttpInterceptor, HttpRequest} from '@angular/common/http';
import {Injectable} from '@angular/core';
import {Observable} from 'rxjs';

import {environment} from '../../../environments/environment';

@Injectable()
export class ApiInterceptor implements HttpInterceptor {

  intercept(req: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {

    req = req.clone({
      url: `${environment.baseApiUrl}/${req.url}`,
      setHeaders: {
        'Access-Control-Allow-Origin': '*',
        'Content-Security-Policy': `frame-ancestors ${environment.security.allowedOrigins}`,
        'X-Frame-Options': `ALLOW-FROM ${environment.security.allowedOrigins}`,
        'X-XSS-Protection': '1; mode=block'
      }
    });

    return next.handle(req);
  }
}
