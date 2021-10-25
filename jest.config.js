module.exports = {
    testRegex: 'tests/vue/.*.spec.js',
    moduleFileExtensions: [
        'js',
        'json',
        'vue'
    ],
    'transform': {
        '^.+\\.js$': '<rootDir>/node_modules/babel-jest',
        '.*\\.(vue)$': '<rootDir>/node_modules/vue-jest'
    },
    setupFilesAfterEnv: ['<rootDir>/tests/vue/jest-setup.js'],
    testEnvironment: 'jsdom',
}
