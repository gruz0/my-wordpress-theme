import { src, dest, watch, series } from 'gulp';
import del from 'del';
import zip from 'gulp-zip';
import info from './package.json';

export const clean = () => del(['dist','bundled']);
export const copy = () => src(['src/**/*']).pipe(dest(`dist/${info.name}`));
export const watchForChanges = () => watch(['src/**/*'], copy);

export const compress = () => {
	return src([`dist/${info.name}/**/*`])
		.pipe(zip(`${info.name}.zip`))
		.pipe(dest('bundled'));
};

export const dev = series(clean, copy, watchForChanges)
export const build = series(clean, copy, compress)
export default dev;
