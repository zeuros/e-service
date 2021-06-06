import { AppEnvironment } from '../app/core/interfaces/app-environment.interface';

export const environment: AppEnvironment = {
  production: false,
  baseApiUrl: 'http://localhost:8000/api',
  security: {
    allowedOrigins: '*'
  }
};
